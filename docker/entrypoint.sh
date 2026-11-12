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

# Application key: use the provided one, otherwise load/generate a persisted key
# stored in storage/app (bind mounted to the host, so it survives rebuilds).
if [ -z "${APP_KEY:-}" ]; then
    KEY_FILE="storage/app/.app_key"
    if [ -s "$KEY_FILE" ]; then
        APP_KEY="$(cat "$KEY_FILE")"
        export APP_KEY
        echo "[entrypoint] Loaded APP_KEY from $KEY_FILE"
    else
        APP_KEY="base64:$(head -c 32 /dev/urandom | base64 | tr -d '\n')"
        printf '%s' "$APP_KEY" > "$KEY_FILE"
        export APP_KEY
        echo "[entrypoint] Generated APP_KEY and persisted it to $KEY_FILE"
    fi
fi

# Ensure package manifests are generated (composer post-autoload-dump equivalent).
php artisan package:discover 2>/dev/null || true

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
