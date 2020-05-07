<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsuarioSeeder::class,
            CategoriasTableSeeder::class,
            ColecaoSeeder::class,
            ProdutoSeeder::class,
            CategoriasTableSeeder::class,
            DoacaoSeeder::class,
            SaldoEquipeSeeder::class,
            VendasSeeder::class
        ]);
    }
}
