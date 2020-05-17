<?php
    system("php artisan migrate"); 
    system("npm install");
    system("npm run dev");
    system("composer update");
    system("php artisan db:seed");
    system('composer require jeroennoten/laravel-adminlte');
    system('php artisan adminlte:install');
    system("php artisan serve");
?>