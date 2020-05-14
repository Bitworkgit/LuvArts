<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Venda extends Model
{

    protected $table = "vendas";

    public function user($id){
        return User::find($id);
    }
    
    public function produto(){
        return $this->belongsTo('App\Model\Produto');
    }


}
