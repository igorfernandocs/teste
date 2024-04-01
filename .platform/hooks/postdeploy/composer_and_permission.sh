#!/bin/bash

set -e

cd /var/www/html/

# Define a data atual
CURRENT_DATE=$(date +"%Y-%m-%d %T")

# Cria o arquivo .env
cat << EOF > .env
APP_NAME=Odontoplay
APP_ENV=develop
APP_KEY=base64:WMnOUYwkRLGqjdJFSvMkDiYbv8dbNrDqyADHDUnV0A4=
APP_DEBUG=true
APP_URL=https://admin-odontocompanyplay-hml.odontocompany.com/api
LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=db-odontoplay-hml.cn8ko0sm0buq.us-east-1.rds.amazonaws.com
DB_PORT=5432
DB_DATABASE=db_odontoplay_hml
DB_USERNAME=odontoplay_hml
DB_PASSWORD=yZ4HMW9gbeYFjLSrJv7tsQ

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=s3
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
MEMCACHED_HOST=127.0.0.1
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=hello@example.com
MAIL_FROM_NAME=\${APP_NAME}

AWS_ACCESS_KEY_ID=AKIAZQ3DP3GPR6FQANXJ
AWS_SECRET_ACCESS_KEY=DVralASR+wDDkJaEjFMwaOHov1dayfMeNg8jimum
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=odc-odontoplay-hml
AWS_USE_PATH_STYLE_ENDPOINT=false
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1
VITE_PUSHER_APP_KEY=\${PUSHER_APP_KEY}
VITE_PUSHER_HOST=\${PUSHER_HOST}
VITE_PUSHER_PORT=\${PUSHER_PORT}
VITE_PUSHER_SCHEME=\${PUSHER_SCHEME}
VITE_PUSHER_APP_CLUSTER=\${PUSHER_APP_CLUSTER}
DO_ACCESS_KEY_ID=DO00P4EWRZUHN9BUETYP
DO_SECRET_ACCESS_KEY=
DO_DEFAULT_REGION=
DO_BUCKET=
DO_FOLDER=
DO_CDN_ENDPOINT=
DO_ENDPOINT=
DO_USE_PATH_STYLE_ENDPOINT=
#DATABASE_URL=\${qodde-databases.DATABASE_URL}
EOF

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
sudo touch passouChown.log