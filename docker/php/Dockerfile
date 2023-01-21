FROM php:8.2-rc-fpm-alpine

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# keep container running
CMD ["tail", "-f", "/dev/null"]