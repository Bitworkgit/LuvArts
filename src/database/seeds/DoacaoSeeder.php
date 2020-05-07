<?php

use Illuminate\Database\Seeder;
use App\Model\Doacoes;

class DoacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $capital = 0;
        for($a = 2000; $a < 2029; $a++){
            $capital += rand(1000,4000);
            SaldoEquipe::create([
                "ano" => $a,
                "capital" => $capital
            ]);
        }
        SaldoEquipe::create([
            "ano" => 2030,
            "capital" => 95200
        ]);
    }
}
