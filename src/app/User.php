<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "usuarios";

    protected $fillable = [
        'nome', 
        'email',
        'senha',
        "cpf",
        "sexo",
        "data_de_nascimento",
        "cidade",
        "uf",
        "endereco",
        "endereco_numero",
        "complemento",
        "bairro",
        "cep",
        "telefone",
        "celular",
        "excluido",
        "administrador",
        "bloqueado"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
