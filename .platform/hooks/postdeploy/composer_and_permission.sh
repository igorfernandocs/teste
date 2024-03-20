#!/bin/bash
cd /var/www/html/
composer install --no-interaction
php artisan migrate --seed