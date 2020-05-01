<?php

use Illuminate\Database\Seeder;
use App\Model\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagens = [
            "images/ph1.png",
            "images/ph2.png",
            "images/ph3.png",
            "images/ph4.png",
            "images/ph5.png",
            "images/ph6.png",
            "images/ph7.png",
            "images/ph8.png",
            "images/ph9.png",
            "images/ph10.png",
            "images/ph11.png",
            "images/ph12.png",
        ];

        foreach($imagens as $imagem){
            Produto::create([
                "nome_pro" => "Produto de amostra",
                "descricao_pro" => "......",
                "preco_pro" => 10.50,
                "ende_foto_pro" => $imagem,
                "user_id" => 1,
                "cod_categoria" => 1,
                "cod_colecoes" => 1
            ]);
        }
    }
}
