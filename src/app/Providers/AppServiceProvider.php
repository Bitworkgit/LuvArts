<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Model\Categoria;
use App\Model\Carrinho;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.menu', 'menu');
        Blade::component('components.requisicao', Requisicao::class);
        Blade::component('components.requisicao', QuebraCabeca::class);

        View::composer([
            'components.menu'
        ], function ($view) {
            $categorias = Categoria::all();
            $carrinho = NULL;
            if(Auth::check()){
                $carrinho = Carrinho::where("comprador_id",Auth::User()->id)->get();
            }
    
            $view->with('categorias', $categorias)
                 ->with('carrinho',$carrinho);
        });
    }
}
