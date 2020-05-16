<?php
    system("php artisan migrate"); 
    system("npm install");
    system("npm run dev");
    system("composer update");
    system("php artisan db:seed");
    system("php artisan serve");
    system('composer require jeroennoten/laravel-adminlte');
    system('php artisan adminlte:install');
    echo "Nota de segurança| nivel: alto | http-proxy DDos |\n";
    echo "Tal vulnerabilidade afeta todas as versões do laravel,
    porém não é um problema para nós visto que não usamos
    proxy reverso.\n
    para mais detalhes: https://npmjs.com/advisories/1486\n";
    echo "projeto atualizado.";
?>