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

        Gate::define('ver-dados', function($user){
            $idCriador = \Request::url();
            $idCriador = explode('/', $idCriador);
            $idCriador = $idCriador[4];

            if($user->id == $idCriador)
                return true;
            else 
                return false;
        });
    }
}
