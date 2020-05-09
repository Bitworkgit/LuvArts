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
        'password',
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
        'password', 'remember_token',
    ];

    public function produto(){
        return $this->hasMany('App\Model\Produto');
    }

    public function colecao(){
        return $this->hasMany("App\Model\Colecao");
    }

    public function venda(){
        return $this->hasMany('App\Venda');
    }

    public function carrinho(){
        return $this->hasMany('App\Carrinho');
    }
}
