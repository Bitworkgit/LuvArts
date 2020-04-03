<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = [
        'nome_pro',
        'descricao_pro',
        'preco_pro',
        'cod_usuario_pro',
        'ende_foto_pro',
        'cod_colecoes'
    ];

    public function produto(){
        return $this->belongsTo('App\Model\Colecoes', 'cod_colecoes');
    }
}
