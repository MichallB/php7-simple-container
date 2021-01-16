FROM php:7.2.31-apache
USER root
COPY php/httpd.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /var/www/html
RUN pecl install xdebug
COPY php/php.ini-development /usr/local/etc/php/php.ini
RUN chown -R www-data:www-data /var/www/html && a2enmod rewrite
# && mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"