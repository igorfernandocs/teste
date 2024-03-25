#!/bin/bash
cd /var/www/html/
CURRENT_DATE=$(date +"%Y-%m-%d %T")
/usr/bin/composer.phar self-update
/usr/bin/composer.phar install --no-interaction > /var/log/composer.log 2>&1
echo "Composer install executado em: $CURRENT_DATE" >> /var/log/composer.log
php artisan migrate --seed > /var/log/migrate.log 2>&1
echo "Migrações e seed executados em: $CURRENT_DATE" >> /var/log/migrate.log
php artisan clear-compiled
php artisan config:cache
php artisan cache:clear
php artisan route:cache
php artisan view:clear
yarn install /var/log/yarn.log 2>&1
yarn build /var/log/yarn.log 2>&1