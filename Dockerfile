FROM php:8.2-fpm

# نصب اکستنشن‌های موردنیاز
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    nano \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# نصب Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# ست کردن مسیر پروژه
WORKDIR /var/www


# COPY composer.json composer.lock ./

# RUN composer install --no-script --no-autoloader

# کپی فایل‌های پروژه
COPY . .

# نصب وابستگی‌ها
# RUN composer install --no-dev --optimize-autoloader

# تنظیم permission
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

RUN docker-php-ext-install pdo pdo_mysql    

# RUN composer dump-autoload --optimize
RUN chmod +x /var/www/docker/entrypoint.sh

EXPOSE 9000
CMD ["php-fpm"] 
