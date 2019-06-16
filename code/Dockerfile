FROM php:7.3-fpm-stretch
RUN apt-get update -y && apt-get install -y git
WORKDIR /var/www/html
ADD code /var/www/html
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer
RUN composer install
RUN chmod -R 777 /var/www/html/storage
