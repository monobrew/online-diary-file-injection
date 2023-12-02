FROM php:8.1-fpm-alpine
RUN apk add --no-cache libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
COPY ./app/composer/composer.json ./
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer update
RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction
COPY ./app ./
