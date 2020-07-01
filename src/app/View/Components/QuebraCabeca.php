<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Model\Produto;

class QuebraCabeca extends Component
{

    public $mensagem;
    public $alternativas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mensagem = "";
        $maisComprados = Produto::registrosValidos()
                                       ->where('vendas','>',0)
                                       ->orderBy('vendas','desc')
                                       ->take(3)
                                       ->get();
        
        $this->alternativas = Produto::registrosValidos()
                                        ->where('vendas','<',$maisComprados->last()->vendas)
                                        ->inRandomOrder()
                                        ->limit(20)
                                        ->get();
        
        if($this->alternativas->count() < 8){
            $this->mensagem = "Não temos a quantidade necessária de artes para exibir essa pagina!";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.quebra-cabeca');
    }
}
