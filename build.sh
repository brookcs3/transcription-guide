#!/bin/bash
set -e

echo "Installing Composer..."
curl -sS https://getcomposer.org/installer | php

echo "Installing dependencies..."
php composer.phar install --no-dev --optimize-autoloader

echo "Generating static site..."
php build-static.php

echo "Build complete!"
