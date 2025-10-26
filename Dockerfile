# 1. Imagen base oficial de PHP con Composer y extensiones necesarias
FROM php:8.2-fpm

# 2. Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 3. Copiar archivos del proyecto
WORKDIR /var/www/html
COPY . .

# 4. Instalar Composer (si no está)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 5. Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# 6. Configurar permisos de almacenamiento y caché
RUN chmod -R 777 storage bootstrap/cache

# 7. Generar key de Laravel
#RUN php artisan key:generate

# 8. Puerto expuesto
EXPOSE 8000

# 9. Comando de ejecución
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
