<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendedor_id')->nullable();
            $table->unsignedBigInteger('comprador_id')->nullable();
            $table->unsignedInteger('produto_id')->nullable();
            $table->integer('quantidade');
            $table->integer('status');

            $table->foreign('vendedor_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('comprador_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
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
        Schema::dropIfExists('vendas');
    }
}
