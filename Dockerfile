# ============================================================
# Stage 1: Build frontend assets with Node
# ============================================================
FROM node:22-alpine AS node-build

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY vite.config.js postcss.config.js tailwind.config.js ./
COPY resources/ resources/
COPY public/ public/

RUN npm run build

# ============================================================
# Stage 2: Install PHP dependencies with Composer
# ============================================================
FROM composer:2 AS composer-build

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-scripts \
    --no-autoloader \
    --prefer-dist \
    --ignore-platform-reqs

COPY app/ app/
COPY bootstrap/ bootstrap/
COPY config/ config/
COPY database/ database/
COPY public/ public/
COPY resources/ resources/
COPY routes/ routes/
COPY storage/ storage/
COPY .env.example .env.example
COPY artisan ./

RUN composer dump-autoload --optimize \
    && composer run-script post-autoload-dump --no-interaction

# ============================================================
# Stage 3: Production runtime (single container, Apache + PHP)
# ============================================================
FROM php:8.4-apache

# Install PHP extensions required by Laravel / Filament / this app:
#   - gd       : Filament FileUpload image handling (articles, tutors, banners...)
#   - intl     : Filament / maatwebsite-excel string handling
#   - zip      : maatwebsite/excel (phpspreadsheet) xlsx export & import
#   - pdo_mysql / pdo_pgsql : optional external database support
#   - pdo_sqlite / bcmath / opcache : Laravel core
RUN apt-get update && apt-get install -y --no-install-recommends \
        libzip-dev \
        libsqlite3-dev \
        libpq-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libwebp-dev \
        libicu-dev \
        curl \
        unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install \
        pdo_mysql \
        pdo_pgsql \
        pdo_sqlite \
        zip \
        gd \
        intl \
        bcmath \
        opcache \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*

# Configure Apache: serve Laravel's public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
        /etc/apache2/sites-available/*.conf \
        /etc/apache2/apache2.conf \
    && printf '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' >> /etc/apache2/apache2.conf

# PHP tuning for production
RUN { \
        echo 'opcache.enable=1'; \
        echo 'opcache.validate_timestamps=0'; \
        echo 'opcache.memory_consumption=192'; \
        echo 'opcache.max_accelerated_files=20000'; \
        echo 'realpath_cache_size=4096K'; \
        echo 'realpath_cache_ttl=600'; \
        echo 'memory_limit=512M'; \
        echo 'upload_max_filesize=32M'; \
        echo 'post_max_size=48M'; \
        echo 'max_execution_time=120'; \
    } > /usr/local/etc/php/conf.d/alhazen-recommended.ini \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

# Copy application source
COPY --from=composer-build /app ./
COPY --from=node-build /app/public/build ./public/build

# Ensure all Laravel storage subdirectories exist, then fix permissions
RUN mkdir -p storage/framework/{cache/data,sessions,testing,views} \
        storage/logs storage/app/public data \
    && chown -R www-data:www-data storage bootstrap/cache database data \
    && chmod +x artisan

# Entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

ENTRYPOINT ["entrypoint.sh"]
CMD ["apache2-foreground"]
