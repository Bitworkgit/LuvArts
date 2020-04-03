<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nome_categoria'
    ];

    public function categoria(){
        $this->hasMany('App\Model\Produto');
    }

}
