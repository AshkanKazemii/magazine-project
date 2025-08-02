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
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ست کردن مسیر پروژه
WORKDIR /var/www

# کپی فایل‌های پروژه
COPY . .

# نصب وابستگی‌ها
# RUN composer install --no-dev --optimize-autoloader

# تنظیم permission
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

RUN docker-php-ext-install pdo pdo_mysql    

EXPOSE 9000
CMD ["php-fpm"] 
# CMD [ "php" , "artisan" , "serve" , "--host=0.0.0.0" , "--port=80" ]