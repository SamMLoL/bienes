<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT3 extends Migration
{
    
    public function up()
    {
        Schema::create('T3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codRegT3', 10)->nullable();
            $table->string('compAse', 5)->nullable();
            $table->string('otraCom', 100)->nullable();
            $table->string('numPoli', 30)->nullable();
            $table->string('tipPoli', 1)->nullable();
            $table->string('montoAse', 27)->nullable();
            $table->string('moneda', 5)->nullable();
            $table->string('espMone', 30)->nullable();
            $table->date('feiniPoli', 10)->nullable();
            $table->date('fefinPoli', 10)->nullable();
            $table->string('poseRes', 2)->nullable();
            $table->string('tipoCobe', 5)->nullable();
            $table->string('espeCobe', 100)->nullable();
            $table->string('descCobe', 200)->nullable();
            $table->integer('revisadot3')->nullable();
            $table->integer('anulart3')->nullable();
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
        Schema::dropIfExists('T3');
    }
}
