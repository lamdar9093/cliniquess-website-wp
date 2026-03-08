FROM php:8.3-fpm-alpine

# Install nginx, supervisord and required tools
RUN apk add --no-cache nginx supervisor

# PHP extensions required by WordPress
RUN docker-php-ext-install mysqli pdo pdo_mysql opcache exif

# nginx config (TCP fastcgi to php-fpm)
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

# supervisord config (runs nginx + php-fpm together)
COPY docker/supervisord.conf /etc/supervisord.conf

# WordPress files
COPY . /var/www/clinique-website-wp

RUN chown -R www-data:www-data /var/www/clinique-website-wp \
    && mkdir -p /run/nginx

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
