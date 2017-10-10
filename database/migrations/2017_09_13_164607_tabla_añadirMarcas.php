<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaAñadirMarcas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('añadirMarcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codMarca', 200)->uniqued()->required();
            $table->string('denCoMar', 200)->uniqued()->required();
            $table->string('nomFabri', 100)->uniqued()->required();
            $table->integer('revisadotM')->nullable();
            $table->integer('anulartM')->nullable();
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
        Schema::dropIfExists('añadirMarcas');
    }
}
