<?php

use App\Model\Colecao;
use App\Model\Usuario;
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
        for($a = 1; $a <= Usuario::all()->count(); $a++){
            Colecao::create([
                "nome_colecao_col" => "Coleção Demonstrativa",
                "usuario_id" => $a
            ]);
        }
    }
}
