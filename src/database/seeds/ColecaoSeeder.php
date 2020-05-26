<?php

use App\Model\Colecao;
use Illuminate\Database\Seeder;

class ColecaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colecao::create([
            "nome_colecao_col" => "Coleção Demonstrativa",
            "usuario_id" => 1
        ]);
    }
}
