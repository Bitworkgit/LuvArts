<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $maisComprados = Produto::where('vendas','>',0)
                                       ->orderBy('vendas','desc')
                                       ->take(3)
                                       ->get();
        
        $alternativas = Produto::where('vendas','<',$maisComprados->last()->vendas)
                                        ->inRandomOrder()
                                        ->limit(12)
                                        ->get();

        return view('welcome',compact('maisComprados','alternativas'));
    }
}
