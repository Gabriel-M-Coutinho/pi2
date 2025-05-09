FROM php:8.2-apache

RUN a2enmod rewrite

COPY . /var/www/html/

# Ativa o uso de .htaccess se necessário
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
