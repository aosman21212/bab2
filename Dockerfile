# Use an official PHP image as a base
FROM php:8.1-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libonig-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libwebp-dev \
        libxpm-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        pkg-config \
        libssl-dev \
        zlib1g-dev \
        libicu-dev \
        libldap2-dev \
        libxslt-dev \
        libbz2-dev \
        libmemcached-dev \
        && docker-php-ext-install zip pdo_mysql bcmath exif gd intl ldap soap xsl bz2

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.json and composer.lock
COPY composer.json composer.lock ./

# Install project dependencies
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application code
COPY . .

# Generate autoloader
RUN composer dump-autoload --no-scripts --optimize

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
