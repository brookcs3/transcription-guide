#!/usr/bin/env bash
set -euo pipefail

WORKDIR="$(pwd)"
LOG="/tmp/artisan-serve.log"
PIDFILE="/tmp/artisan.pid"
DIST_DIR="dist"
HOST="0.0.0.0"          # bind to all interfaces
CHECK_HOST_IPV4="127.0.0.1"
CHECK_HOST_IPV6="::1"
PORT="8000"
URL_IPV4="http://${CHECK_HOST_IPV4}:${PORT}"
URL_IPV6="http://[${CHECK_HOST_IPV6}]:${PORT}"
START_TIMEOUT=180       # increased timeout in seconds
SLEEP_INTERVAL=1

cleanup() {
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
# Disable JIT and CLI opcache to avoid the "JIT is incompatible..." warning
php -d opcache.jit=0 -d opcache.enable_cli=0 artisan serve --host="$HOST" --port="$PORT" >"$LOG" 2>&1 &
echo $! > "$PIDFILE"

echo "Waiting up to ${START_TIMEOUT}s for local server to respond..."
elapsed=0
while [ "$elapsed" -lt "$START_TIMEOUT" ]; do
  # Try IPv4 HTTP check first (most common)
  if command -v curl >/dev/null 2>&1; then
    if curl --ipv4 --fail --silent --show-error --max-time 5 --retry 3 --retry-delay 1 --retry-connrefused "$URL_IPV4" >/dev/null 2>&1; then
      echo "Server is responding via IPv4 HTTP."
      break
    fi

    # Try IPv6 HTTP check next
    if curl --ipv6 --fail --silent --show-error --max-time 5 --retry 3 --retry-delay 1 --retry-connrefused "$URL_IPV6" >/dev/null 2>&1; then
      echo "Server is responding via IPv6 HTTP."
      break
    fi
  fi

  # fallback: check port listening (ss or netstat)
  if command -v ss >/dev/null 2>&1; then
    if ss -ltn | grep -q -E "(:|\\])${PORT}\\s+LISTEN"; then
      echo "Port $PORT is LISTENing (ss)."
      break
    fi
  elif command -v netstat >/dev/null 2>&1; then
    if netstat -ltn | grep -q ":${PORT}[[:space:]]*LISTEN"; then
      echo "Port $PORT is LISTENing (netstat)."
      break
    fi
  fi

  sleep $SLEEP_INTERVAL
  elapsed=$((elapsed + SLEEP_INTERVAL))
done

# final verification: prefer IPv4, then IPv6
curl_ok=false
if command -v curl >/dev/null 2>&1; then
  if curl --ipv4 --fail --silent --show-error --max-time 5 "$URL_IPV4" >/dev/null 2>&1; then
    curl_ok=true
    echo "Final verification: IPv4 HTTP check passed."
  elif curl --ipv6 --fail --silent --show-error --max-time 5 "$URL_IPV6" >/dev/null 2>&1; then
    curl_ok=true
    echo "Final verification: IPv6 HTTP check passed."
  fi
fi

if [ "$curl_ok" != true ]; then
  echo "Server did not start within ${START_TIMEOUT}s or did not respond to HTTP checks."
  echo
  echo "=== /tmp/artisan-serve.log (first 500 lines) ==="
  sed -n '1,500p' "$LOG" || true
  echo
  echo "=== Socket/listening info (ss -ltn) ==="
  if command -v ss >/dev/null 2>&1; then
    ss -ltn || true
  elif command -v netstat >/dev/null 2>&1; then
    netstat -ltn || true
  else
    echo "ss/netstat not available"
  fi
  echo
  echo "=== curl verbose attempts (IPv4 then IPv6) ==="
  if command -v curl >/dev/null 2>&1; then
    echo "-- curl --ipv4 -v $URL_IPV4 --max-time 10 --retry 0 --no-buffer"
    curl --ipv4 -v --max-time 10 --retry 0 --no-buffer "$URL_IPV4" || true
    echo
    echo "-- curl --ipv6 -v $URL_IPV6 --max-time 10 --retry 0 --no-buffer"
    curl --ipv6 -v --max-time 10 --retry 0 --no-buffer "$URL_IPV6" || true
  else
    echo "curl not available to perform verbose checks"
  fi
  echo
  echo "Full artisan log: $LOG"
  exit 1
fi

echo "Running static export..."

# Try common export methods in order, fallback to wget mirror
if [ -f package.json ] && npm run | grep -q 'export'; then
  echo "Detected npm export script — running: npm ci && npm run export"
  npm ci
  npm run export
elif php artisan list --no-ansi | grep -qE 'static:export|export'; then
  echo "Detected artisan export command — trying static:export then export"
  if php artisan list --no-ansi | grep -q 'static:export'; then
    php artisan static:export --output="$DIST_DIR" || php artisan static:export
  else
    php artisan export --output="$DIST_DIR" || php artisan export
  fi
else
  echo "No export task detected. Using wget to mirror the site into ${DIST_DIR}"
  if ! command -v wget >/dev/null 2>&1; then
    echo "Error: wget not installed in runner. Install or add an export script."
    exit 1
  fi
  wget --mirror --convert-links --adjust-extension --page-requisites --no-parent --directory-prefix="$DIST_DIR" "$URL_IPV4"
  # wget will create dist/127.0.0.1:8000 or dist/::1:8000 ; move files up if present
  if [ -d "${DIST_DIR}/${CHECK_HOST_IPV4}:${PORT}" ]; then
    shopt -s dotglob || true
    mv "${DIST_DIR}/${CHECK_HOST_IPV4}:${PORT}/"* "$DIST_DIR"/ || true
    rm -rf "${DIST_DIR:?}/${CHECK_HOST_IPV4}:${PORT}"
  elif [ -d "${DIST_DIR}/${CHECK_HOST_IPV6}:${PORT}" ]; then
    shopt -s dotglob || true
    mv "${DIST_DIR}/${CHECK_HOST_IPV6}:${PORT}/"* "$DIST_DIR"/ || true
    rm -rf "${DIST_DIR:?}/${CHECK_HOST_IPV6}:${PORT}"
  fi
fi

echo "Static export complete. Files located in ${DIST_DIR}/"
exit 0
