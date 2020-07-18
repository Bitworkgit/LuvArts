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
            CategoriaSeeder::class,
            ColecaoSeeder::class,
            DoacaoSeeder::class,
            SaldoEquipeSeeder::class,
            ProdutoSeeder::class
        ]);
    }
}
