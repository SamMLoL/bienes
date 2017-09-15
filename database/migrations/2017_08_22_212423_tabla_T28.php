<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT28 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T28', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_8', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomProan', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('nomAuto', 100)->nullable();
            $table->string('numSeAdm', 30)->nullable();
            $table->date('feSeAdm', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot28')->nullable();
            $table->integer('anulart28')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('T28');
    }
}
