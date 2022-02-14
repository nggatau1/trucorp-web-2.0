FROM php:7.4-apache

COPY index.php /var/www/html

RUN chmod -R 773 index.php
RUN chown -R www-data index.php
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
