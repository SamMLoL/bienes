<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codMarca', 100)->nullable();
            $table->string('denCoMar', 100)->nullable();
            $table->string('nomFabri', 100)->nullable();
            $table->integer('revisadot5')->nullable();
            $table->integer('anulart5')->nullable();
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
        Schema::dropIfExists('T5');
    }
}
