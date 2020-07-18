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
            $table->tinyIncrements('id',1);
            $table->string('nome_pro', 100);
            $table->string('descricao_pro',250);
            $table->decimal('preco_pro', 8,2);
            $table->string('ende_foto_pro', 80);
            $table->unsignedTinyInteger('usuario_id')->nullable();
            $table->unsignedTinyInteger('cod_colecoes')->nullable();
            $table->unsignedTinyInteger('cod_categoria')->nullable();
            $table->integer('vendas')->default(0);
            $table->integer('excluido')->default(0);
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');            ;
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
