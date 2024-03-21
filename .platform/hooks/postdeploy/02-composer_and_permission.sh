#!/bin/bash
cd /var/www/html/
composer install --no-interaction > /var/log/composer.log
php artisan migrate --seed
php artisan clear-compiled
php artisan config:cache
php artisan cache:clear
php artisan route:cache
php artisan view:clear
echo "teste composer" > /var/log/composer.log