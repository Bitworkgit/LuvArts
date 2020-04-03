<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
    protected $table = 'colecoes';

    protected $fillable = [
        'nome_colecao_col'
    ];

    public function colecao(){
        $this->hasMany('App\Model\Produto');
    }
}
