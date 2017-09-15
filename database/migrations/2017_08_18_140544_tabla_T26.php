<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT26 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T26', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_6', 12)->nullable();
            $table->string('codAdq', 2);
            $table->string('nomCope', 100);
            $table->string('nomBen', 100);
            $table->string('nomLic', 255);
            $table->string('numLic', 30);
            $table->date('feLic', 10);
            $table->string('numCon', 30);
            $table->date('feCon', 10);
            $table->string('nomRegn', 100);
            $table->string('tomo', 20);
            $table->integer('folio');
            $table->date('feReg', 10);
            $table->integer('revisadot26');
            $table->integer('anulart26');
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
        Schema::dropIfExists('T26');
    }
}
