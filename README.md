# Список шуток
По корневому маршруту выдаётся постоянно обновляемый список шуток с сайта https://official-joke-api.appspot.com/random_joke.
# запуск
```bash
composer install
php artisan migrate
composer run dev
php artisan schedule:work
```