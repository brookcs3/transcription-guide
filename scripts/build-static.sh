#!/usr/bin/env bash
set -euo pipefail

REPO_ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$REPO_ROOT"

echo "==== Start static build export ===="

# Build frontend assets if present
if [ -f package.json ]; then
  if command -v npm >/dev/null 2>&1; then
    echo "Installing frontend deps and building (if script exists)..."
    npm ci
    if npm run | grep -q " build"; then
      npm run build
    elif npm run | grep -q " prod"; then
      npm run prod
    else
      echo "No npm build script found, skipping frontend build."
    fi
  else
    echo "npm not found; skipping frontend build."
  fi
fi

# Ensure app key exists
php artisan key:generate --force >/dev/null 2>&1 || true

# Start artisan serve in the background
PORT=8000
HOST=127.0.0.1
echo "Starting php artisan serve on ${HOST}:${PORT} ..."
php artisan serve --host=${HOST} --port=${PORT} > /tmp/artisan-serve.log 2>&1 &
SERVE_PID=$!

cleanup() {
  echo "Stopping artisan server (pid ${SERVE_PID})..."
  kill "${SERVE_PID}" >/dev/null 2>&1 || true
}
trap cleanup EXIT

# Wait up to 30s for server to respond
echo "Waiting for the local server to respond..."
for i in $(seq 1 30); do
  if curl -sSf "http://${HOST}:${PORT}/" >/dev/null 2>&1; then
    echo "Server is up."
    break
  fi
  sleep 1
done

if ! curl -sSf "http://${HOST}:${PORT}/" >/dev/null 2>&1; then
  echo "Server did not start within expected time. See /tmp/artisan-serve.log"
  cat /tmp/artisan-serve.log || true
  exit 1
fi

# Create/clean dist
rm -rf dist
mkdir -p dist

# Mirror the site into dist using wget
echo "Mirroring site to dist/ using wget..."
wget --mirror --convert-links --adjust-extension --page-requisites --no-parent --no-host-directories --directory-prefix=dist "http://${HOST}:${PORT}/"

# Normalize folder structure if wget created a host directory
HOST_DIR="dist/${HOST}:${PORT}"
if [ -d "$HOST_DIR" ]; then
  echo "Normalizing mirrored folder structure..."
  shopt -s dotglob || true
  mv "$HOST_DIR"/* dist/ || true
  rm -rf "$HOST_DIR"
fi

echo "Static export complete. Files are in dist/"
echo "==== End static build export ===="
exit 0
