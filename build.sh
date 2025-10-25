#!/bin/bash
set -e

echo "Adding PHP 8.2 repository..."
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update

echo "Installing PHP 8.2..."
sudo apt-get install -y php8.2 php8.2-cli php8.2-mbstring php8.2-xml php8.2-curl php8.2-zip

echo "Verifying PHP version..."
php8.2 -v

echo "Installing Composer..."
curl -sS https://getcomposer.org/installer | php8.2

echo "Installing dependencies..."
php8.2 composer.phar install --no-dev --optimize-autoloader

echo "Generating static site..."
php8.2 build-static.php

echo "Build complete!"
