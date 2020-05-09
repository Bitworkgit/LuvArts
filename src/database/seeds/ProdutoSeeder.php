<?php

use Illuminate\Database\Seeder;
use App\Model\Produto;
use App\Model\Categoria;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            ["images/ph1.png",30],
            ["images/ph2.png",20],
            ["images/ph3.png",10],
            ["images/ph4.png",0],
            ["images/ph5.png",0],
            ["images/ph6.png",0],
            ["images/ph7.png",0],
            ["images/ph8.png",0],
            ["images/ph9.png",0],
            ["images/ph10.png",0],
            ["images/ph11.png",0],
            ["images/ph12.png",0],
            ["images/ph13.png",0],
            ["images/ph14.png",0],
            ["images/ph15.png",0],
            ["images/ph16.png",0],
            ["images/ph17.png",0],
            ["images/ph18.png",0],
            ["images/ph19.png",0],
            ["images/ph20.png",0],
        ];

        foreach($dados as $dado){
            Produto::create([
                "nome_pro" => "Produto de amostra",
                "descricao_pro" => "......",
                "preco_pro" => rand(12,100),
                "ende_foto_pro" => $dado[0],
                "user_id" => 1,
                "cod_categoria" => rand(1,Categoria::all()->count()),
                "cod_colecoes" => 1,
                "vendas" => $dado[1]
            ]);
        }
    }
}
