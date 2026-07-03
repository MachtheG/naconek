FROM php:8.3-cli-alpine

# System dependencies and PHP extensions for Laravel + Postgres
RUN apk add --no-cache \
    bash \
    git \
    unzip \
    zip \
    libzip-dev \
    oniguruma-dev \
    icu-dev \
    postgresql-dev \
    nodejs \
    npm

RUN docker-php-ext-install \
    bcmath \
    intl \
    mbstring \
    pdo \
    pdo_pgsql \
    zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install PHP dependencies first for better build caching
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader

# Install JS dependencies next for better build caching
COPY package.json package-lock.json* ./
RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi

# Copy application source
COPY . .

# Build front-end assets and optimize Laravel caches
RUN npm run build \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Ensure runtime write permissions
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 10000

# Run migrations on deploy start, then serve from public/
CMD sh -lc 'php artisan migrate --force && php -S 0.0.0.0:${PORT:-10000} -t public'
