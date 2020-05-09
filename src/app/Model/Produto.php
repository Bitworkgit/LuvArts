<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = [ 
        'nome_pro',
        'descricao_pro',
        'preco_pro',
        'cod_usuario_pro',
        'ende_foto_pro',
        'cod_colecoes',
        'cod_categoria'
    ];

    public function colecao(){
        return $this->belongsTo('App\Model\Colecoes', 'cod_colecoes');
    }

    public function categoria(){
        return $this->belongsTo('App\Model\Categoria', 'cod_categoria');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function venda(){
        return $this->hasMany('App\Venda');
    }

    public function carrinho(){
        return $this->hasMany('App\Carrinho');
    }
}
