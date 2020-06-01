<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("cpf",14)->nullable();
            $table->longText("biografia")->nullable()->default(".......");
            $table->string('nome',146);
            $table->float('capital', 7, 2)->nullable()->default(0.00);
            $table->string("foto_perfil")->nullable()->default("images/empty-avatar.png");
            $table->string("foto_capa")->nullable()->default("images/empty-background.jpg");
            $table->integer("sexo");
            $table->dateTime("data_de_nascimento");
            $table->integer("endereco")->nullable();
            $table->string("site",60)->nullable()->default(".......");
            $table->string("estado",19)->nullable();
            $table->string("cidade",30)->nullable();
            $table->string("rua",60)->nullable();
            $table->string("cep",9)->nullable();
            $table->string("complemento",100)->nullable();
            $table->string("bairro",60)->nullable();
            $table->string("celular",14)->nullable();
            $table->integer("excluido");
            $table->integer("administrador");
            $table->integer("bloqueado");
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
