<?php

use Illuminate\Database\Seeder;
use App\Model\Venda;
use App\Model\User;
use App\Model\Produto;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($a = 0; $a < 10; $a++){
            Venda::create([
                'vendedor_id' => User::inRandomOrder()->first()->id,
                'comprador_id' => User::inRandomOrder()->first()->id,
                'produto_id' => Produto::inRandomOrder()->first()->id,
                'quantidade' => rand(1,10),
                'status' => rand(1,3)
            ]);
        }
    }
}
