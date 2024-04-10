FROM php:7.4-fpm

RUN usermod -u 1000 -s /bin/bash www-data && groupmod -g 1000 www-data

RUN apt-get update && apt-get install -y \
    libicu-dev \
    nginx \
    unzip \
    libaio-dev \
    libzip-dev \
    wget \
    curl \
    openssl \
    nano \
    locales \
    && docker-php-ext-install zip \
    && docker-php-ext-install sockets \
    && docker-php-ext-install intl

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions \
    pdo_pgsql \
    pgsql \
    openssl \
    zip \
    mbstring

RUN rm /etc/nginx/sites-available/default
ADD .docker/nginx/default /etc/nginx/sites-available/default

ADD .docker/php/php.ini /usr/local/etc/php/php.ini
RUN rm /usr/local/etc/php-fpm.d/www.conf
ADD .docker/php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN rm -Rf /var/www/* && \
    mkdir /var/www/html/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www/html/

WORKDIR "/var/www/html"

EXPOSE 8080

ADD .docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/*

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer install

CMD ["nginx", "-g", "daemon off;"]

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]