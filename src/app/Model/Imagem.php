<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = "imagens";

    protected $fillable =[
        'dir_imagem',
        'id_produto'
    ];

    public function imagem(){
        $this->belongsTo('App\Model\Produto', 'id_produto');
    }
}
