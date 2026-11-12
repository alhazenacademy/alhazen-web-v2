#!/bin/sh
set -e

cd /var/www/html

# The nginx service only needs the web server, not Laravel bootstrapping.
if [ "$1" = "nginx" ]; then
    exec "$@"
fi

# Make sure the writable directories exist (they may be bind mounts).
mkdir -p \
    bootstrap/cache \
    storage/app/public \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs

chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true
chmod -R ug+rwx storage bootstrap/cache 2>/dev/null || true

# SQLite database file must exist before PDO touches it.
if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    [ -f database/database.sqlite ] || touch database/database.sqlite
fi

# Generate an application key if none was provided.
if [ -z "${APP_KEY:-}" ]; then
    echo "[entrypoint] APP_KEY not set, generating one..."
    php artisan key:generate --force
    echo "[entrypoint] NOTE: set APP_KEY in your .env (docker compose run --rm app php artisan key:generate) to keep it stable across container rebuilds."
fi

# Symlink for uploaded files (public/storage -> storage/app/public).
php artisan storage:link 2>/dev/null || true

# Run migrations when requested (default: true, disable with RUN_MIGRATIONS=false).
if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    echo "[entrypoint] Running migrations..."
    php artisan migrate --force || true
fi

if [ "${APP_ENV:-production}" = "production" ]; then
    php artisan config:cache
    php artisan view:cache
else
    php artisan config:clear
    php artisan view:clear
fi

exec "$@"
