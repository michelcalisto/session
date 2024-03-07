# Utilizamos la imagen base de PHP 7.2 FPM
FROM php:7.2-fpm

# Copiamos nuestro archivo de configuración php.ini personalizado
COPY ./docker/php.ini /usr/local/etc/php/php.ini

# Establecemos el directorio de trabajo
WORKDIR /var/www/html

# Instalamos dependencias adicionales si es necesario
# Por ejemplo, si tu aplicación necesita extensiones PHP específicas

# Copiamos el código de la aplicación al contenedor
COPY ./src /var/www/html

# Cambiamos el propietario de los archivos de la aplicación
RUN chown -R www-data:www-data /var/www/html

# Permisos para la carpeta de sesiones
RUN chmod -R 755 /var/www/html

# Puerto expuesto por el contenedor
EXPOSE 9000

# Comando por defecto para ejecutar el contenedor
CMD ["php-fpm"]
