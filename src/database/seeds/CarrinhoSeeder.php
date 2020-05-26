<?php

use Illuminate\Database\Seeder;
use App\Model\Carrinho;
use App\Model\Usuario;
use App\Model\Produto;

class CarrinhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adms = Usuario::where('administrador',1)->get();
        foreach($adms as $adm){
            for($a = 0; $a < rand(2, 5); $a++){
                Carrinho::create([
                    "comprador_id" => $adm->id,
                    "produto_id" => rand(1,Produto::all()->count())
                ]);
            }
        }
    }
}
