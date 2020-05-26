<?php

namespace App\Http\Controllers\Venda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Venda;

class VendaController extends Controller
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
