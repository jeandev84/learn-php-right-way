FROM php:8.0.2-fpm

# load php extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# directory where our project
WORKDIR /var/www