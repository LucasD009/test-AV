# Utiliser l'image officielle PHP FPM
FROM php:8.2-fpm

# Mise à jour de la liste des paquets et installation des dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install \
    pdo pdo_mysql mysqli intl

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier l'application dans le conteneur
COPY . .

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installer les dépendances avec Composer
RUN composer install --no-scripts

# Exposer le port 9000 pour PHP-FPM
EXPOSE 9000