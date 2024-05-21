FROM composer:2 as build

WORKDIR /app

COPY . .

RUN composer install --no-dev

FROM php:8.0-fpm

WORKDIR /var/www/html

COPY --from=build /app .

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
