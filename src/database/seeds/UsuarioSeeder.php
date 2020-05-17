<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UsuarioSeeder extends Seeder
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
            'password' => Hash::make("1234abcd"),
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 0,
            "bloqueado" => 0
        ]);
        //-------------------------------ADM
        User::create([
            'nome' => "Thiago Piassi Bonfogo",
            'email' => "thiagopiassi@gmail.com",
            'password' => Hash::make("#$&%#$@54678dfghgRGHJsghaadF"),
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 1,
            "bloqueado" => 0
        ]);

        User::create([
            'nome' => "Bruna Timoteo",
            'email' => "brunatimoteo@gmail.com",
            'password' => Hash::make("#$&%#$@54678dfghgRGHJsghaadF"),
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 1,
            "bloqueado" => 0
        ]);

        User::create([
            'nome' => "Mateus Meira",
            'email' => "mateusmeira@gmail.com",
            'password' => Hash::make("#$&%#$@54678dfghgRGHJsghaadF"),
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 1,
            "bloqueado" => 0
        ]);

        User::create([
            'nome' => "Bruno Cesar",
            'email' => "brunocesar@gmail.com",
            'password' => Hash::make("#$&%#$@54678dfghgRGHJsghaadF"),
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 1,
            "bloqueado" => 0
        ]);

        User::create([
            'nome' => "Higor Freitas",
            'email' => "pudim@gmail.com",
            'password' => Hash::make("#$&%#$@54678dfghgRGHJsghaadF"),
            'sexo' => 1,
            'data_de_nascimento' => Carbon::parse('2000-01-01'),
            'excluido' => 0,
            "administrador" => 1,
            "bloqueado" => 0
        ]);
    }
}
