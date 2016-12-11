#!bin/sh

gulp --production
php artisan cache:clear
php artisan view:clear
