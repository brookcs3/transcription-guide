#!/usr/bin/env bash
set -euo pipefail

# Build static site by starting a lightweight PHP server (IPv4) and mirroring with wget.
# This avoids artisan serve binding races and IPv6/IPv4 confusion on GH Actions runners.
# Adjust ROUTES array below if you want deterministic per-route export instead of wget mirror.

WORKDIR="$(pwd)"
LOG="/tmp/artisan-serve.log"
PIDFILE="/tmp/php-server.pid"
DIST_DIR="dist"
HOST="127.0.0.1"         # force IPv4 listener and checks
PORT="8000"
URL="http://${HOST}:${PORT}"
EXPORT_TIMEOUT=600      # seconds to keep trying the export
EXPORT_RETRY_INTERVAL=3 # seconds between retries

cleanup() {
  echo "Cleanup: stopping background server if any..."
  if [ -f "$PIDFILE" ]; then
    pid="$(cat "$PIDFILE" 2>/dev/null || true)"
    if [ -n "$pid" ] && kill -0 "$pid" 2>/dev/null; then
      echo "Stopping PHP built-in server (pid $pid)..."
      kill "$pid" || true
      wait "$pid" 2>/dev/null || true
    fi
    rm -f "$PIDFILE"
  fi
}
trap 'cleanup' EXIT INT TERM

echo "Cleaning and creating ${DIST_DIR}/"
rm -rf "$DIST_DIR"
mkdir -p "$DIST_DIR"

# Ensure .env and migrations already ran prior to calling this script (CI step should run them).
# Start PHP built-in server bound to 127.0.0.1 (IPv4) and use public/index.php as router.
echo "Starting PHP built-in server on ${HOST}:${PORT} (logs -> ${LOG}) ..."
# Disable opcache.jit and CLI opcache for CI stability
php -d opcache.jit=0 -d opcache.enable_cli=0 -S ${HOST}:${PORT} -t public public/index.php >"$LOG" 2>&1 &
echo $! > "$PIDFILE"

# Wait for the server to answer on IPv4
echo "Waiting up to 120s for server to respond at ${URL} ..."
start_ts=$(date +%s)
while : ; do
  if curl --ipv4 --fail --silent --show-error --max-time 5 "$URL" >/dev/null 2>&1; then
    echo "Server responded at ${URL}"
    break
  fi
  now=$(date +%s)
  elapsed=$((now - start_ts))
  if [ "$elapsed" -ge 120 ]; then
    echo "Server did not respond within 120s. Dumping ${LOG} (first 500 lines):"
    sed -n '1,500p' "$LOG" || true
    echo "ss/netstat (listening sockets):"
    ( command -v ss >/dev/null 2>&1 && ss -ltn ) || ( command -v netstat >/dev/null 2>&1 && netstat -ltn ) || true
    exit 1
  fi
  sleep 1
done

echo "Server ready. Starting export (will retry for up to ${EXPORT_TIMEOUT}s)..."

# Option A: Deterministic export by fetching specific routes (preferred for small sites)
# If you have a known list of public routes, populate ROUTES and uncomment the deterministic export block below.
# Example:
# ROUTES=("/" "/about" "/posts" "/contact")
#
# mkdir -p "$DIST_DIR"
# for p in "${ROUTES[@]}"; do
#   out="$DIST_DIR${p}"
#   # ensure directory exists
#   mkdir -p "$(dirname "$out")"
#   # map root path to index.html
#   if [ "$p" = "/" ]; then
#     curl --ipv4 --fail --show-error --max-time 15 "${URL}/" -o "${DIST_DIR}/index.html" || true
#   else
#     # remove leading slash for filename if desired
#     filename="${p#/}"
#     curl --ipv4 --fail --show-error --max-time 15 "${URL}${p}" -o "${DIST_DIR}/${filename}.html" || true
#   fi
# done
# echo "Deterministic export finished."

# Option B: fallback to wget mirror (works generically)
EXPORT_START=$(date +%s)
while : ; do
  if command -v wget >/dev/null 2>&1; then
    echo "Running wget mirror into ${DIST_DIR}..."
    rm -rf "${DIST_DIR}" && mkdir -p "${DIST_DIR}"
    wget --mirror --convert-links --adjust-extension --page-requisites --no-parent --directory-prefix="${DIST_DIR}" "${URL}"
    # wget often creates dist/127.0.0.1:8000; move files up if present
    hostdir="${DIST_DIR}/${HOST}:${PORT}"
    if [ -d "$hostdir" ]; then
      shopt -s dotglob || true
      mv "${hostdir}/"* "${DIST_DIR}/" 2>/dev/null || true
      rm -rf "${hostdir}"
    fi

    # crude check: ensure we produced at least one HTML or index file
    if find "${DIST_DIR}" -type f -iname '*.html' -o -name 'index.php' | head -n 1 >/dev/null 2>&1; then
      echo "wget produced files in ${DIST_DIR} — export succeeded."
      break
    else
      echo "wget run produced no HTML files — will retry."
    fi
  else
    echo "wget not installed on runner; trying curl fallback for root only..."
    mkdir -p "${DIST_DIR}"
    if curl --ipv4 --fail --show-error --max-time 15 "${URL}/" -o "${DIST_DIR}/index.html"; then
      echo "curl root succeeded."
      break
    else
      echo "curl root failed; will retry."
    fi
  fi

  now=$(date +%s)
  elapsed=$((now - EXPORT_START))
  if [ "$elapsed" -ge "$EXPORT_TIMEOUT" ]; then
    echo "Export timed out after ${EXPORT_TIMEOUT}s."
    echo "Dumping ${LOG} (first 500 lines):"
    sed -n '1,500p' "$LOG" || true
    ( command -v ss >/dev/null 2>&1 && ss -ltn ) || ( command -v netstat >/dev/null 2>&1 && netstat -ltn ) || true
    exit 1
  fi
  sleep "${EXPORT_RETRY_INTERVAL}"
done

echo "Static export complete. Files located in ${DIST_DIR}/"
# success
exit 0
