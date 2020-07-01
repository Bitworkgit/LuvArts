<?php

use Illuminate\Database\Seeder;
use App\Model\Produto;
use App\Model\Categoria;
use App\Model\Usuario;
use App\Model\Colecao;

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
            ["images/ph1.png",rand(0,100)],
            ["images/ph2.png",rand(0,100)],
            ["images/ph3.png",rand(0,100)],
            ["images/ph4.png",rand(0,100)],
            ["images/ph5.png",rand(0,100)],
            ["images/ph6.png",rand(0,100)],
            ["images/ph7.png",rand(0,100)],
            ["images/ph8.png",rand(0,100)],
            ["images/ph9.png",rand(0,100)],
            ["images/ph10.png",rand(0,100)],
            ["images/ph11.png",rand(0,100)],
            ["images/ph12.png",rand(0,100)],
            ["images/ph13.png",rand(0,100)],
            ["images/ph14.png",rand(0,100)],
            ["images/ph15.png",rand(0,100)],
            ["images/ph16.png",rand(0,100)],
            ["images/ph17.png",rand(0,100)],
            ["images/ph18.png",rand(0,100)],
            ["images/ph19.png",rand(0,100)],
            ["images/ph20.png",rand(0,100)],
        ];

        foreach($dados as $dado){
            $id = rand(1,Usuario::all()->count()); //id da colecao e do usuario
            Produto::create([
                "nome_pro" => "Produto de amostra",
                "descricao_pro" => "......",
                "preco_pro" => rand(12,100),
                "ende_foto_pro" => $dado[0],
                "usuario_id" => $id,
                "cod_categoria" => rand(1,Categoria::all()->count()),
                "cod_colecoes" => $id,
                "vendas" => $dado[1]
            ]);
        }
    }
}
