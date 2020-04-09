<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColecaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_colecao_col', 100);
            $table->unsignedBigInteger('user_id');
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->foreign('user_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('colecaos');
    }
}
