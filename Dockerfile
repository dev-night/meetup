FROM php:apache

LABEL Name=meetup-redirecter

COPY index.php /var/www/html
