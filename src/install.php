<?php

    $comandos = [
        "composer install",
        "copy .env.example .env",
        "php artisan key:generate",
        "npm install",
        "npm run dev",
        "php artisan migrate",
        "php artisan storage:link",
        "php artisan db:seed",
        "composer require jeroennoten/laravel-adminlte",
        "php artisan adminlte:install"
    ];

    foreach($comandos as $comando){
        system($comando);
    }
    
    echo "Nota de segurança| nivel: alto | http-proxy DDos |\n";
    echo "Tal vulnerabilidade afeta todas as versões do laravel,
    porém não é um problema para nós visto que não usamos
    proxy reverso.\n
    para mais detalhes: https://npmjs.com/advisories/1486";

    echo "instalação finalizada\n";
    system("php artisan serve");
?>