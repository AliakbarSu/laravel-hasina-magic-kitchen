FROM php:8.1.0-fpm

COPY ./src /var/www

RUN docker-php-ext-install pdo pdo_mysql 