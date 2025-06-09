FROM php:8.2-apache

# Ativar mod_rewrite para URLs amigáveis
RUN a2enmod rewrite headers expires deflate

# Permitir uso de .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Instalar dependências para extensões do PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-jpeg

# Instalar extensões PHP essenciais (incluindo pdo_mysql)
RUN docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip opcache

# Copiar os arquivos do projeto para dentro do container
COPY . /var/www/html/