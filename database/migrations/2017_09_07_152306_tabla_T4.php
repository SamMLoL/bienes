<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codResp', 10)->nullable();
            $table->string('tipoResp', 2)->nullable();
            $table->integer('cedula')->nullable();
            $table->string('nomRes', 100)->nullable();
            $table->string('apeRes', 100)->nullable();
            $table->string('telfRes', 20)->nullable();
            $table->string('cargoRes', 200)->nullable();
            $table->string('correRes', 200)->nullable();
            $table->string('depAdmRes', 10)->nullable();
            $table->integer('revisadot4')->nullable();
            $table->integer('anulart4')->nullable();
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
        Schema::dropIfExists('T4');
    }
}
