FROM php:apache
COPY ./app/ /var/www/html
RUN docker-php-ext-install mysqli
EXPOSE 80
