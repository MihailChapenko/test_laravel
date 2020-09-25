FROM php:7.3-fpm

RUN apt-get update \
    && docker-php-ext-install pdo pdo_mysql

RUN apt-get install -y \
        libzip-dev \
        zip \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip

RUN apt-get update && apt-get install -y \
        git \
        curl \
        wget \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev zlib1g-dev libicu-dev g++ libmagickwand-dev --no-install-recommends libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install mbstring zip xml gd \
    && pecl install imagick \
    && docker-php-ext-enable imagick

RUN docker-php-ext-install exif

#Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

