<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $mensagem = "";
        $maisComprados = Produto::registrosValidos()
                                       ->where('vendas','>',0)
                                       ->orderBy('vendas','desc')
                                       ->take(3)
                                       ->get();
        
        $alternativas = Produto::registrosValidos()
                                        ->where('vendas','<',$maisComprados->last()->vendas)
                                        ->inRandomOrder()
                                        ->limit(20)
                                        ->get();
        if($maisComprados->count() < 3 || $alternativas->count() < 8){
            $mensagem = "Não temos a quantidade necessária de artes para exibir essa pagina!";
        }
        return view('inicio/index',compact('maisComprados','alternativas','mensagem'));
    }
}
