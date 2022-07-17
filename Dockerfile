FROM php:5.6-cli
COPY ./index.html:/var/www/html/index.html
COPY ./index.html:/var/www/index.html
RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev \
	&& pecl install memcached-2.2.0 \
	&& docker-php-ext-enable memcached