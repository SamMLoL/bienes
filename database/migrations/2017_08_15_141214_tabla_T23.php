<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT23 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T23', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_3', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomCed', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('numFin', 30)->nullable();
            $table->date('feFin', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot23')->nullable();
            $table->integer('anulart23')->nullable();
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
        Schema::dropIfExists('T23');
    }
}
