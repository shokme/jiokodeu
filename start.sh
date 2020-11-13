#!/bin/bash
touch database/database.sqlite
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
