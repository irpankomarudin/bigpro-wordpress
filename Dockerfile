from php:7.2-apache

run docker-php-ext-install mysqli

workdir /var/www/html

copy . .
