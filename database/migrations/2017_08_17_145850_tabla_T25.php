<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT25 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T25', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_5', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomPan', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('nomAut', 100)->nullable();
            $table->string('numSena', 30)->nullable();
            $table->date('feSena', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot25')->nullable();
            $table->integer('anulart25')->nullable();
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
        Schema::dropIfExists('T25');
    }
}
