@ECHO OFF
php artisan route:cache
php artisan cache:clear
php artisan config:cache
php artisan view:clear
php artisan optimize
php artisan clear-compiled
PAUSE