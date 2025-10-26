# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    zip unzip git libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Habilita mod_rewrite de Apache (necesario para Laravel)
RUN a2enmod rewrite

# Copia los archivos de tu proyecto
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo de configuración de Apache
COPY ./docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Da permisos a storage y bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instala dependencias PHP del proyecto
RUN composer install --no-dev --optimize-autoloader

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
