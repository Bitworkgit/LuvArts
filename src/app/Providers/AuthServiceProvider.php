<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* 
         * Verifica se o usuario conectado é diferente do visitante no perfil do usuario
         */
        Gate::define('ver-dados', function($user){
            $idCriador = \Request::url();
            $idCriador = explode('/', $idCriador);

            if($user->id == $idCriador[4])
                return true;
            else 
                return false;
        });

        /* 
         * Verifica se o usuario conectado é diferente do visitante na lista de artes
         */
        Gate::define('ver-dados-edit', function($user){
            $idCriador = \Request::url();
            $idCriador = explode('/', $idCriador);

            if($user->id == $idCriador[5])
                return true;
            else 
                return false;
        });
    }
}
