<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Produto;

class HomeController extends Controller
{
    public function index()
    {
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
        

        return view('inicio/index',compact('maisComprados','alternativas'));
    }
}
