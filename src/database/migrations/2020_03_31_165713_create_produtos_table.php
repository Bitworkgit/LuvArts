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
            $table->longText('descricao_pro');
            $table->decimal('preco_pro', 8,2);
            $table->string('ende_foto_pro', 80);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedInteger('cod_colecoes')->nullable();
            $table->unsignedInteger('cod_categoria')->nullable();

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->foreign('user_id')->references('id')->on('usuarios')->onDelete('cascade');            ;
            $table->foreign('cod_categoria')->references('id')->on('categorias')->onDelete('cascade');            ;
            $table->foreign('cod_colecoes')->references('id')->on('colecoes')->onDelete('cascade');
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
