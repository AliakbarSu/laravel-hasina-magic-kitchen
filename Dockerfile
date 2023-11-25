FROM php:8.1.0-fpm-alpine

COPY ./src /var/www

RUN docker-php-ext-install pdo pdo_mysql && chown -R www-data:www-data /var/www && chmod 755 /var/www
