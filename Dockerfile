FROM php:8.1.9-fpm-alpine

# Actualizar e instalar paquetes necesarios
RUN apk --no-cache upgrade && \
    apk --no-cache add bash git sudo openssh libxml2-dev oniguruma-dev autoconf gcc g++ make npm freetype-dev libjpeg-turbo-dev libpng-dev libzip-dev

# Instalar extensiones de PHP
RUN pecl channel-update pecl.php.net
RUN pecl install pcov ssh2 swoole
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install mbstring xml pcntl gd zip sockets pdo pdo_mysql bcmath soap
RUN docker-php-ext-enable mbstring xml gd zip pcov pcntl sockets bcmath pdo pdo_mysql soap swoole

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# Copiar archivos
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=spiralscout/roadrunner:2.4.2 /usr/bin/rr /usr/bin/rr

WORKDIR /app
COPY . .

# Instalar dependencias y compilar assets
RUN composer install
RUN composer require laravel/octane spiral/roadrunner
RUN npm install 
RUN npm run build

# Generar clave de aplicación y configurar Octane
RUN php artisan key:generate
RUN php artisan octane:install --server="swoole"

# Iniciar servidor Octane
CMD php artisan octane:start --server="swoole" --host="0.0.0.0" 
EXPOSE 8000