FROM php:8.2-fpm

COPY ./.docker/php/php.ini /usr/local/etc/php/
COPY ./.docker/php/docker.conf /usr/local/etc/php-fpm.d/docker.conf
COPY ./.docker/php/.bashrc /root/

RUN apt-get update

RUN apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN apt-get install -y build-essential
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y curl
RUN apt-get install -y gnupg
RUN apt-get install -y procps
RUN apt-get install -y vim
RUN apt-get install -y git
RUN apt-get install -y unzip
RUN apt-get install -y libzip-dev
RUN apt-get install -y libpq-dev
RUN apt-get install -y zip



# Xdebug
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
#ENV PHP_IDE_CONFIG 'serverName=localhost'
#RUN echo "xdebug.mode=develop,debug,coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.client_host=docker.for.mac.localhost" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.log=/var/log/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
RUN composer config --global process-timeout 3600

WORKDIR /app/
