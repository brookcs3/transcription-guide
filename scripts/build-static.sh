#!/usr/bin/env bash
set -euo pipefail

WORKDIR="$(pwd)"
LOG="/tmp/artisan-serve.log"
PIDFILE="/tmp/artisan.pid"
DIST_DIR="dist"
HOST="0.0.0.0"          # bind to all interfaces
CHECK_HOST="127.0.0.1"  # use loopback for checks
PORT="8000"
URL="http://${CHECK_HOST}:${PORT}"
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
# Disable JIT and CLI opcache to avoid the "JIT is incompatible..." warning and any
# interaction with third-party extensions that override zend_execute_ex().
# - opcache.jit=0 disables JIT
# - opcache.enable_cli=0 disables opcache for CLI (safer for CI runs)
# Start in background and capture PID
php -d opcache.jit=0 -d opcache.enable_cli=0 artisan serve --host="$HOST" --port="$PORT" >"$LOG" 2>&1 &
echo $! > "$PIDFILE"

echo "Waiting up to ${START_TIMEOUT}s for local server to respond at ${URL} ..."
elapsed=0
while [ "$elapsed" -lt "$START_TIMEOUT" ]; do
  # prefer curl check (follow redirects, fail on HTTP 5xx/4xx)
  if command -v curl >/dev/null 2>&1; then
    if curl --fail --silent --show-error --max-time 5 --retry 5 --retry-delay 1 --retry-connrefused "$URL" >/dev/null 2>&1; then
      echo "Server is responding via curl."
      break
    fi
  fi

  # fallback: check port listening (ss or netstat)
  if command -v ss >/dev/null 2>&1; then
    if ss -ltn "( sport = :$PORT )" | grep -q LISTEN; then
      echo "Port $PORT is LISTENing (ss)."
      break
    fi
  elif command -v netstat >/dev/null 2>&1; then
    if netstat -ltn | grep -q ":$PORT[[:space:]]*LISTEN"; then
      echo "Port $PORT is LISTENing (netstat)."
      break
    fi
  fi

  sleep $SLEEP_INTERVAL
  elapsed=$((elapsed + SLEEP_INTERVAL))
done

# final verification
if ! curl --fail --silent --show-error --max-time 5 "$URL" >/dev/null 2>&1; then
  echo "Server did not start within ${START_TIMEOUT}s. Dumping ${LOG} (first 500 lines):"
  sed -n '1,500p' "$LOG" || true
  echo "Full log: $LOG"
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
  wget --mirror --convert-links --adjust-extension --page-requisites --no-parent --directory-prefix="$DIST_DIR" "$URL"
  # wget will create dist/127.0.0.1:8000 ; move files up if present
  if [ -d "${DIST_DIR}/${CHECK_HOST}:${PORT}" ]; then
    shopt -s dotglob || true
    mv "${DIST_DIR}/${CHECK_HOST}:${PORT}/"* "$DIST_DIR"/ || true
    rm -rf "${DIST_DIR:?}/${CHECK_HOST}:${PORT}"
  fi
fi

echo "Static export complete. Files located in ${DIST_DIR}/"
exit 0
