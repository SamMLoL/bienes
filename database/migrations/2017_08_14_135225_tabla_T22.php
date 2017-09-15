<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT22 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T22', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_2', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomPa', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('nomAuto', 100)->nullable();
            $table->string('numSenc', 30)->nullable();
            $table->string('nomRegno', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio');
            $table->date('feSenc', 10)->nullable();
            $table->date('feReg', 8)->nullable();
            $table->integer('revisadot22')->nullable();
            $table->integer('anulart22')->nullable();
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
        Schema::dropIfExists('T22');
    }
}
