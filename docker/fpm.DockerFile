FROM php:8.1.0-fpm-alpine AS base
ENV EXT_APCU_VERSION=master
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -vvv https://github.com/krakjoe/apcu.git

RUN apk add --update zlib-dev libpng-dev libzip-dev $PHPIZE_DEPS

RUN docker-php-ext-install exif
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install bcmath
# RUN pecl install apcu
RUN docker-php-source extract \
    && apk -Uu add git \
    && git clone --branch $EXT_APCU_VERSION --depth 1 https://github.com/krakjoe/apcu.git /usr/src/php/ext/apcu \
    && cd /usr/src/php/ext/apcu && git submodule update --init \
    && docker-php-ext-install apcu
RUN docker-php-ext-enable apcu

FROM base AS dev

COPY /composer.json composer.json
COPY /composer.lock composer.lock
COPY /app app
COPY /bootstrap bootstrap
COPY /config config
COPY /artisan artisan

FROM base AS build-fpm

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ../src/artisan artisan
COPY ../src /var/www/html
#COPY ../src/composer.json composer.json

RUN #composer install --prefer-dist --no-ansi --no-dev --no-autoloader

RUN composer install

COPY ../src/bootstrap bootstrap
COPY ../src/app app
COPY ../src/config config
COPY ../src/routes routes
RUN mkdir files


# COPY . /var/www/html

RUN composer dump-autoload -o

FROM build-fpm AS fpm

COPY --from=build-fpm /var/www/html /var/www/html
