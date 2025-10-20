# Usa PHP 8.2 con Apache y extensiones necesarias
FROM php:8.2-apache

# Instala dependencias necesarias para Laravel y Node
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    npm

# Habilita mod_rewrite de Apache para rutas amigables
RUN a2enmod rewrite

# Define el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia todos los archivos de tu proyecto al contenedor
COPY . .

# Instala la extensión exif de PHP
RUN docker-php-ext-install exif


# Instala Composer (PHP) y dependencias del proyecto
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Instala dependencias de Node y compila assets (Vite)
RUN npm install && npm run build

# Da permisos correctos a storage y bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Expone el puerto que Render asignará
EXPOSE 10000

# Comando para iniciar Laravel con PHP interno
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
