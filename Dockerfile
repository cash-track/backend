FROM php:7.3-fpm

ARG APP_ENV=production
ENV APP_ENV ${APP_ENV}

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        curl \
        git \
        unzip \
        libz-dev \
        libpq-dev \
        zlib1g-dev \
        libzip-dev \
        libjpeg-dev \
        libpng-dev \
        libicu-dev \
        libfreetype6-dev \
        libssl-dev \
        libmcrypt-dev \
    && rm -rf /var/lib/apt/lists/*

# Git network issue fix
RUN git config --global http.sslVerify false;

RUN docker-php-ext-install pdo_mysql mysqli \
    && docker-php-ext-configure gd \
        --with-jpeg-dir=/usr/lib \
        --with-freetype-dir=/usr/include/freetype2 \
    && docker-php-ext-install gd \
    && pecl install -o -f redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip \
    && docker-php-ext-install tokenizer \
    && rm -rf /tmp/pear

# XDebug only for local
# TODO. Update XDebug to stable when it is come
RUN if [ $APP_ENV = "local" ] ; then \
        pecl install xdebug-2.7.0RC2 \
        && docker-php-ext-enable xdebug \
        && echo "xdebug.remote_enable=1\n" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.remote_port=9001\n" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    ; fi

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN usermod -u 1000 www-data

COPY . /var/www

WORKDIR /var/www

RUN if [ $APP_ENV = "production" ] ; then \
        composer install \
    ; fi

EXPOSE 9000