<?php
    system("php artisan migrate"); 
    system("npm install");
    system("npm run dev");
    system("composer update");
    system("php artisan db:seed");
    system("php artisan serve");
?>