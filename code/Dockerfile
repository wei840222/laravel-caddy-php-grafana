FROM php:7.3-fpm-stretch
RUN apt-get update -y && apt-get install -y git
WORKDIR /code
ADD code /code
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer
RUN composer install
