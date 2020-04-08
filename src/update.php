<? 
    system("php artisan migrate"); 
    system("npm install");
    system("npm run dev");
    system("composer update");
    system("php artisan migrate");
    system("php artisan db:seed");
   
?>