#!/bin/bash

set -e

cd /var/www/html/

# Define a data atual
CURRENT_DATE=$(date +"%Y-%m-%d %T")

# Instalação do Yarn
curl -sL https://dl.yarnpkg.com/rpm/yarn.repo -o /etc/yum.repos.d/yarn.repo
yum install -y yarn

# Instalação do create-vite e vite
npm install -g create-vite
npm install vite

# Atualiza o Composer e instala dependências
export COMPOSER_ALLOW_SUPERUSER=1
/usr/bin/composer.phar self-update
/usr/bin/composer.phar install --no-interaction --no-plugins > /var/log/composer.log 2>&1
echo "Composer install executado em: $CURRENT_DATE" >> /var/log/composer.log

# Executa as migrações do banco de dados e semeia com dados se necessário
php artisan migrate --seed > /var/log/migrate.log 2>&1
echo "Migrações e seed executados em: $CURRENT_DATE" >> /var/log/migrate.log

# Limpa o compilado do Laravel e faz cache de configurações
php artisan clear-compiled
php artisan config:cache

# Limpa o cache da aplicação, cache de rotas e cache de views
php artisan cache:clear
php artisan route:cache
php artisan view:clear

# Instalação do Yarn e construção do projeto
yarn install >> /var/log/yarn.log 2>&1
yarn build >> /var/log/yarn.log 2>&1

# Ajusta permissoes
sudo chown -R webapp:webapp /var/www/html/ >> /var/log/chown.log 2>&1
sudo touch passouChown2.log