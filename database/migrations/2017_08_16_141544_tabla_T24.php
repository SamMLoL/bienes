<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT24 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T24', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_4', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomDona', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('numConac', 30)->nullable();
            $table->date('feConac', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot24')->nullable();
            $table->integer('anulart24')->nullable();
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
        Schema::dropIfExists('T24');
    }
}
