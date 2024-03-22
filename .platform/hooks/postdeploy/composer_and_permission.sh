#!/bin/bash
cd /var/www/html/
/usr/bin/composer.phar self-update
/usr/bin/composer.phar install --no-interaction > /var/log/composer.log
php artisan migrate --seed > /var/log/migrate.log
php artisan clear-compiled
php artisan config:cache
php artisan cache:clear
php artisan route:cache
php artisan view:clear