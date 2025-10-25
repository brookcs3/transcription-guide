e#!/usr/bin/env bash
set -euo pipefail

WORKDIR="$(pwd)"
LOG="/tmp/artisan-serve.log"
PIDFILE="/tmp/artisan.pid"
EXPORT_PIDFILE="/tmp/export.pid"
DIST_DIR="dist"
HOST="0.0.0.0"          # bind to all interfaces
CHECK_HOST_IPV4="127.0.0.1"
CHECK_HOST_IPV6="::1"
PORT="8000"
URL_IPV4="http://${CHECK_HOST_IPV4}:${PORT}"
URL_IPV6="http://[${CHECK_HOST_IPV6}]:${PORT}"

# Timeouts (seconds)
START_TIMEOUT=180       # how long we wait for server/listen detection
EXPORT_TIMEOUT=600      # how long the exporter will keep trying before giving up
EXPORT_RETRY_INTERVAL=3 # delay between export retries once server responds

SLEEP_INTERVAL=1

cleanup() {
  echo "Cleanup: stopping background processes if any..."
  if [ -f "$EXPORT_PIDFILE" ]; then
    export_pid="$(cat "$EXPORT_PIDFILE" 2>/dev/null || true)"
    if [ -n "$export_pid" ] && kill -0 "$export_pid" 2>/dev/null; then
      echo "Killing exporter (pid $export_pid)"
      kill "$export_pid" || true
      wait "$export_pid" 2>/dev/null || true
    fi
    rm -f "$EXPORT_PIDFILE"
  fi

  if [ -f "$PIDFILE" ]; then
    pid="$(cat "$PIDFILE" 2>/dev/null || true)"
    if [ -n "$pid" ] && kill -0 "$pid" 2>/dev/null; then
      echo "Stopping artisan server (pid $pid)..."
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

echo "Starting php artisan serve on ${HOST}:${PORT} (logs -> ${LOG}) ..."
php -d opcache.jit=0 -d opcache.enable_cli=0 artisan serve --host="$HOST" --port="$PORT" >"$LOG" 2>&1 &
echo $! > "$PIDFILE"

# Helper: perform the actual export once server is responsive
perform_export() {
  echo "=== perform_export: exporting to ${DIST_DIR} ==="

  # prefer built-in npm export if present
  if [ -f package.json ] && npm run | grep -q 'export'; then
    echo "Detected npm export script — running npm ci && npm run export"
    npm ci
    if npm run export; then
      echo "npm export succeeded"
      return 0
    else
      echo "npm export failed"
      return 1
    fi
  fi

  # try artisan static export commands
  if php artisan list --no-ansi | grep -qE 'static:export|export'; then
    echo "Detected artisan export command — attempting static:export/export"
    if php artisan list --no-ansi | grep -q 'static:export'; then
      if php artisan static:export --output="$DIST_DIR"; then
        echo "artisan static:export succeeded"
        return 0
      else
        echo "artisan static:export failed"
      fi
    fi

    if php artisan export --output="$DIST_DIR"; then
      echo "artisan export succeeded"
      return 0
    else
      echo "artisan export failed"
    fi
  fi

  # fallback: wget mirror (works for most simple sites)
  if command -v wget >/dev/null 2>&1; then
    echo "No export task detected; using wget to mirror site into ${DIST_DIR}"
    wget --mirror --convert-links --adjust-extension --page-requisites --no-parent --directory-prefix="$DIST_DIR" "$URL_IPV4"
    # Move up if wget created a host-named subdir
    if [ -d "${DIST_DIR}/${CHECK_HOST_IPV4}:${PORT}" ]; then
      shopt -s dotglob || true
      mv "${DIST_DIR}/${CHECK_HOST_IPV4}:${PORT}/"* "$DIST_DIR"/ || true
      rm -rf "${DIST_DIR:?}/${CHECK_HOST_IPV4}:${PORT}"
    elif [ -d "${DIST_DIR}/${CHECK_HOST_IPV6}:${PORT}" ]; then
      shopt -s dotglob || true
      mv "${DIST_DIR}/${CHECK_HOST_IPV6}:${PORT}/"* "$DIST_DIR"/ || true
      rm -rf "${DIST_DIR:?}/${CHECK_HOST_IPV6}:${PORT}"
    fi

    # Basic check: ensure we have some files
    if [ -n "$(find "$DIST_DIR" -type f | head -n 1 || true)" ]; then
      echo "wget mirror succeeded"
      return 0
    else
      echo "wget mirror produced no files"
      return 1
    fi
  else
    echo "wget not found; cannot run fallback mirror"
    return 1
  fi
}

# Export loop: keep trying until server responds and export succeeds or timeout reached
export_loop() {
  echo "Exporter started (will try up to ${EXPORT_TIMEOUT}s)..."
  local elapsed=0

  while [ "$elapsed" -lt "$EXPORT_TIMEOUT" ]; do
    # Prefer HTTP IPv4 then IPv6 checks
    server_ready=false
    if command -v curl >/dev/null 2>&1; then
      if curl --ipv4 --fail --silent --show-error --max-time 5 "$URL_IPV4" >/dev/null 2>&1; then
        server_ready=true
        echo "Server responds on IPv4"
      elif curl --ipv6 --fail --silent --show-error --max-time 5 "$URL_IPV6" >/dev/null 2>&1; then
        server_ready=true
        echo "Server responds on IPv6"
      fi
    fi

    # If server is not yet responsive, print a short status and sleep
    if [ "$server_ready" != true ]; then
      if command -v ss >/dev/null 2>&1; then
        if ss -ltn | grep -q -E "(:|\\])${PORT}\\s+LISTEN"; then
          echo "Port ${PORT} is LISTENing but HTTP probe failed (elapsed ${elapsed}s)"
        else
          echo "Port ${PORT} not yet LISTENing (elapsed ${elapsed}s)"
        fi
      else
        echo "Server not responsive yet (elapsed ${elapsed}s)"
      fi

      sleep $EXPORT_RETRY_INTERVAL
      elapsed=$((elapsed + EXPORT_RETRY_INTERVAL))
      continue
    fi

    # Server responds — attempt export. If it fails, sleep and retry.
    if perform_export; then
      echo "Export completed successfully"
      return 0
    else
      echo "Export attempt failed; will retry after ${EXPORT_RETRY_INTERVAL}s (elapsed ${elapsed}s)"
      sleep $EXPORT_RETRY_INTERVAL
      elapsed=$((elapsed + EXPORT_RETRY_INTERVAL))
    fi
  done

  echo "Exporter timed out after ${EXPORT_TIMEOUT}s"
  return 2
}

# Start the exporter in the background immediately (it will poll until server responds)
export_loop &
export_pid=$!
echo "$export_pid" > "$EXPORT_PIDFILE"
echo "Exporter started in background (pid $export_pid)"

# Wait for exporter to finish. If it exits successfully, continue; otherwise show diagnostics.
wait_timeout() {
  local pid="$1"
  local timeout="$2"
  local waited=0
  while kill -0 "$pid" 2>/dev/null; do
    if [ "$waited" -ge "$timeout" ]; then
      return 1
    fi
    sleep 1
    waited=$((waited + 1))
  done
  # process exited — get its exit code
  wait "$pid"
  return $?
}

# Wait for exporter up to EXPORT_TIMEOUT + margin
TOTAL_WAIT=$((EXPORT_TIMEOUT + 30))
echo "Waiting for exporter to finish (up to ${TOTAL_WAIT}s)..."
if wait_timeout "$export_pid" "$TOTAL_WAIT"; then
  echo "Exporter finished successfully."
  exit 0
else
  echo "Exporter did not finish within ${TOTAL_WAIT}s. Dumping diagnostics..."
  echo
  echo "=== /tmp/artisan-serve.log (first 500 lines) ==="
  sed -n '1,500p' "$LOG" || true
  echo
  echo "=== ss -ltn output ==="
  if command -v ss >/dev/null 2>&1; then ss -ltn || true; fi
  if command -v netstat >/dev/null 2>&1; then netstat -ltn || true; fi
  echo
  echo "=== Exporter stdout/stderr (if any) ==="
  if [ -f "$EXPORT_PIDFILE" ]; then
    echo "Exporter PID file present at $EXPORT_PIDFILE"
  fi
  echo "Full artisan log: $LOG"
  exit 1
fi
