<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table = "carrinhos";

    public function user(){
        $this->hasOne('App\User');
    }

    public function produto(){
        $this->hasMany('App\Model\Produto');
    }
}
