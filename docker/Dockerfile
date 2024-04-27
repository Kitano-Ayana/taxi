FROM php:8.1-apache
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql \
    && pecl install xdebug && docker-php-ext-enable xdebug

COPY docker/php.ini /usr/local/etc/php/conf.d/php-overrides.ini
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN a2enmod rewrite

WORKDIR /var/www/html