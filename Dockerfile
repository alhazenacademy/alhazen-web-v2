# syntax=docker/dockerfile:1

###############################################################################
# Stage 1: Frontend (Vite build -> public/build)
###############################################################################
FROM node:22-alpine AS frontend

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY . .

ARG VITE_APP_NAME=Alhazen
ENV VITE_APP_NAME=${VITE_APP_NAME}

RUN npm run build

###############################################################################
# Stage 2: Composer dependencies
###############################################################################
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
        --no-dev \
        --no-scripts \
        --no-autoloader \
        --prefer-dist \
        --no-interaction

COPY . .
RUN composer dump-autoload --optimize --no-scripts --no-interaction \
    && composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

###############################################################################
# Stage 3: Runtime (PHP-FPM + nginx)
###############################################################################
FROM php:8.3-fpm-bookworm AS app

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    TZ=Asia/Jakarta

# System deps + PHP extensions required by Laravel 12 / Filament 4 / maatwebsite/excel
RUN apt-get update && apt-get install -y --no-install-recommends \
        nginx \
        git \
        unzip \
        curl \
        ca-certificates \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libwebp-dev \
        libzip-dev \
        libicu-dev \
        libonig-dev \
    && docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype \
    && docker-php-ext-install -j"$(nproc)" \
        gd \
        zip \
        bcmath \
        intl \
        mbstring \
        pdo_mysql \
        pdo_sqlite \
        opcache \
    && rm -rf /var/lib/apt/lists/* \
    && rm -f /etc/nginx/sites-enabled/default

# Production-ish PHP settings
RUN { \
        echo 'opcache.enable=1'; \
        echo 'opcache.memory_consumption=256'; \
        echo 'opcache.interned_strings_buffer=16'; \
        echo 'opcache.max_accelerated_files=20000'; \
        echo 'opcache.validate_timestamps=0'; \
        echo 'realpath_cache_size=4096K'; \
        echo 'realpath_cache_ttl=600'; \
        echo 'upload_max_filesize=64M'; \
        echo 'post_max_size=64M'; \
        echo 'memory_limit=256M'; \
    } > /usr/local/etc/php/conf.d/app.ini

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Application source
COPY . .
# Frontend build output
COPY --from=frontend /app/public/build ./public/build
# Optimized vendor directory
COPY --from=vendor /app/vendor ./vendor
# Runtime files
COPY docker/entrypoint.sh /usr/local/bin/entrypoint
COPY docker/nginx.conf /etc/nginx/conf.d/default.conf

RUN chmod +x /usr/local/bin/entrypoint \
    && mkdir -p \
        bootstrap/cache \
        storage/app/public \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/testing \
        storage/framework/views \
        storage/logs \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 9000 80

ENTRYPOINT ["entrypoint"]
CMD ["php-fpm"]
