#!/bin/bash
set -e

cd /var/www/html

# Ensure all Laravel storage subdirectories exist (host bind mount may start empty)
mkdir -p storage/framework/{cache/data,sessions,testing,views} \
        storage/logs storage/app/public

# Create .env on first run if it doesn't exist (mounted or generated)
if [ ! -f .env ]; then
    echo "No .env found, creating from .env.example..."
    cp .env.example .env
fi

# Generate APP_KEY if empty (persisted to APP_KEY_FILE so it survives
# container recreation)
if ! grep -q "^APP_KEY=base64" .env; then
    if [ -n "$APP_KEY_FILE" ] && [ -s "$APP_KEY_FILE" ]; then
        echo "Reusing existing APP_KEY from ${APP_KEY_FILE}..."
        APP_KEY_VALUE=$(cat "$APP_KEY_FILE")
        sed -i "s|^APP_KEY=.*|APP_KEY=${APP_KEY_VALUE}|" .env
    else
        echo "Generating APP_KEY..."
        php artisan key:generate --force
        if [ -n "$APP_KEY_FILE" ]; then
            grep "^APP_KEY=" .env | cut -d= -f2- > "$APP_KEY_FILE"
        fi
    fi
fi

# Wait for DB to be ready if using an external database
if [ -n "$DB_HOST" ]; then
    case "$DB_CONNECTION" in
        pgsql|postgres)
            DB_DRIVER="pgsql"
            DB_DEFAULT_PORT=5432
            ;;
        *)
            DB_DRIVER="mysql"
            DB_DEFAULT_PORT=3306
            ;;
    esac
    DB_PORT="${DB_PORT:-$DB_DEFAULT_PORT}"
    if [ "$DB_DRIVER" = "pgsql" ]; then
        DSN="pgsql:host=${DB_HOST};port=${DB_PORT}"
    else
        DSN="mysql:host=${DB_HOST};port=${DB_PORT}"
    fi
    echo "Waiting for ${DB_DRIVER} database at ${DB_HOST}:${DB_PORT}..."
    ATTEMPTS=0
    until php -r "try { new PDO('${DSN}', getenv('DB_USERNAME'), getenv('DB_PASSWORD')); echo 'ok'; } catch (Exception \$e) { exit(1); }" >/dev/null 2>&1; do
        ATTEMPTS=$((ATTEMPTS+1))
        if [ "$ATTEMPTS" -ge 15 ]; then
            echo "ERROR: database at ${DB_HOST}:${DB_PORT} not reachable after 15 attempts."
            echo "Check DB_HOST / DB_PORT / DB_USERNAME / DB_PASSWORD, and that this"
            echo "container is attached to the same docker network as the database."
            exit 1
        fi
        sleep 2
    done
    echo "Database is reachable."
fi

# Point storage to public (for public files/symlinked storage)
php artisan storage:link --force >/dev/null 2>&1 || true

# Run migrations (SQLite by default; can be skipped with MIGRATE=false)
if [ "${MIGRATE:-true}" = "true" ]; then
    php artisan migrate --force
fi

# Fix ownership after migrations (migrations may run as root and create files
# that the web server user, www-data, needs to write to)
chown -R www-data:www-data data database storage bootstrap/cache 2>/dev/null || \
    chown -R www-data:www-data database storage bootstrap/cache

# Clear and warm caches
php artisan config:clear >/dev/null 2>&1 || true
php artisan route:clear >/dev/null 2>&1 || true
php artisan view:clear >/dev/null 2>&1 || true

php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Laravel app is ready. Starting web server..."

exec "$@"
