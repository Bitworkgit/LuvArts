<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Venda;

class VendasController extends Controller
{
    protected function incrementar($id){
        $venda = Venda::find($id);
        $venda->status++;
        $status = "";

        if($venda->status == 2){
            $status = "processando";
        }
        else{
            $status = "enviado";
        }
        $venda->save();
        return back()->with('success',"Produto $status!");
    }
}
