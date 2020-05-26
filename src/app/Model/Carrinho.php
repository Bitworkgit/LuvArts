<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table = "carrinhos";

    protected $fillable = [
        'produto_id',
        'comprador_id'
    ];

    public function user(){
        return $this->belongsTo('App\Model\Usuario');
    }

    public function produto(){
        return $this->belongsTo('App\Model\Produto');
    }
}
