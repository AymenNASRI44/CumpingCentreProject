# Utiliser une image PHP avec FPM
FROM php:8.1-fpm

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer les dépendanc0es système nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip mbstring exif pcntl

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copier les fichiers de votre projet dans le conteneur
COPY . .

# Installer les dépendances PHP via Composer
RUN composer install --optimize-autoloader

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html
EXPOSE 9000

# Démarrer PHP-FPM
CMD ["php-fpm"]