FROM php:7.3-fpm-stretch
WORKDIR /code
ADD code /code
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer
RUN composer install
