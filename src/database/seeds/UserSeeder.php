<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-------------------------------Usuário
        User::create([
            'nome' => "Alex Figueiro",
            'email' => "user@gmail.com",
            'password' => "1234abcd",
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 0,
            "bloqueado" => 0
        ]);
        //-------------------------------ADM
        User::create([
            'nome' => "Alex Figueiro",
            'email' => "admin@gmail.com",
            'password' => "#$&%#$@54678dfghgRGHJsghaadF",
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 0,
            "bloqueado" => 0
        ]);

    }
}
