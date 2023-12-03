FROM php:8.1-fpm-alpine
RUN apk add --no-cache libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
WORKDIR /var/www/html/composer
COPY ./app/composer/composer.json .
COPY ./app/composer/composer.lock .
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install
WORKDIR /var/www/html/
COPY ./app . 
