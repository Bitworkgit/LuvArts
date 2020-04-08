<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
    protected $table = 'colecoes';

    protected $fillable = [
        'nome_colecao_col'
    ];

    public function produto(){
        $this->hasMany('App\Model\Produto');
    }

    public function usuario(){
        $this->belongsTo('App\User');
    }
}
