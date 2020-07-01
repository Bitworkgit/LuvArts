<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\Usuario;

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

    public function usuario(){
        return $this->belongsTo('App\Model\Usuario');
    }

    public function venda(){
        return $this->hasMany('App\Model\Venda');
    }

    public function carrinho(){
        return $this->hasMany('App\Model\Carrinho');
    }

    public static function registrosValidos(){
        $ids = Usuario::select('id')
                      ->where('bloqueado',1)
                      ->orWhere('excluido',1);

        $registros = Produto::whereNotIn('usuario_id',$ids)
                            ->where('excluido',0);

        return $registros;
    }
}
