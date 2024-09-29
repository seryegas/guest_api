FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . /var/www
RUN composer install

#COPY ./php.ini /usr/local/etc/php/

RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

CMD ["php-fpm"]
