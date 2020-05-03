<?php

use Illuminate\Database\Seeder;
use App\Model\SaldoEquipe;

class SaldoEquipeSeeder extends Seeder
{
    public function run()
    {   
        $capital = 0;
        for($a = 2000; $a < 2030; $a++){
            $capital += rand(1000,4000);
            SaldoEquipe::create([
                "ano" => $a,
                "capital" => $capital
            ]);
        }
    }
}
