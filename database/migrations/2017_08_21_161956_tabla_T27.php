<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT27 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T27', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_7', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomQtra', 200)->nullable();
            $table->string('nomBen', 200)->nullable();
            $table->string('numAuto', 30)->nullable();
            $table->date('feAuto', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot27')->nullable();
            $table->integer('anulart27')->nullable();
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
        Schema::dropIfExists('T27');
    }
}
