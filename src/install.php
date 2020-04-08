<?php

    $comandos = [
        "composer install",
        "copy .env.example .env",
        "php artisan key:generate",
        "npm install",
        "npm run dev",
        "php artisan migrate",
        "php artisan db:seed"
    ];

    foreach($comandos as $comando){
        system($comando);
    }

    echo "Projeto instalado com sucesso!";
    system("php artisan serve");
?>