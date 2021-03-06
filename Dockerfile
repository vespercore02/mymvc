FROM php:7.2-apache

COPY ./app /var/www/html

RUN apt-get update \
 && apt-get install -y git zlib1g-dev  \
 && docker-php-ext-install pdo pdo_mysql \
 && a2enmod rewrite \
 && curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer \
 && /usr/local/bin/composer install

WORKDIR /var/www/html
