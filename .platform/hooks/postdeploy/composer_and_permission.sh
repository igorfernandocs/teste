#!/bin/bash

set -e

cd /var/www/html/

# Instala as dependências do Composer
/usr/bin/composer install --no-interaction
