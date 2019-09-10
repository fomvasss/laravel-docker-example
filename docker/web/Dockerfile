FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    zip \
    unzip \
    vim \
    mc \
    htop \
    redis-tools \
    cron \
    supervisor

RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

RUN useradd -ms /bin/bash user
USER user
WORKDIR /home/user

RUN composer global require laravel/installer
ENV PATH=/home/user/.composer/vendor/bin/:$PATH
