<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Requisicao extends Component
{
    public $classe;
    public $metodo;
    public $action;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $classe = "btn btn-primary", $metodo = "PUT")
    {
        $this->classe = $classe;
        $this->metodo = $metodo;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.requisicao');
    }
}
