<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT21 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T21', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_1', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('codPro', 10)->nullable();
            $table->string('numCom', 30)->nullable();
            $table->string('numNota', 30)->nullable();
            $table->string('numFac', 30)->nullable();
            $table->date('feCom', 10)->nullable();
            $table->date('feNota', 10)->nullable();
            $table->date('feFac', 30)->nullable();
            $table->integer('revisadot21')->nullable();
            $table->integer('anulart21')->nullable();
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
        Schema::dropIfExists('T21');
    }
}
