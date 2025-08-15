#!/bin/bash
set -e

composer install
php artisan key:generate
php artisan migrate
php artisan optimize:clear

exec "$@"