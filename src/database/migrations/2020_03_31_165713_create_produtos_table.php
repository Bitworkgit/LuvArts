<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_pro', 100);
            $table->string('descricao_pro', 100);
            $table->decimal('preco_pro', 8,2);
            //$table->integer('cod_usuario_pro');
            //$table->string('ende_foto_pro', 37);
            $table->unsignedInteger('cod_colecoes');
            $table->unsignedInteger('cod_categoria');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->foreign('cod_categoria')->references('id')->on('categorias')->nullable();
            $table->foreign('cod_colecoes')->references('id')->on('colecoes')->nullable();

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
        Schema::dropIfExists('produtos');
    }
}
