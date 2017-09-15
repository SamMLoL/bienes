<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T6', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codModel', 10);
            $table->string('denModFab', 100);
            $table->string('codMarca', 10);
            $table->string('codSegModel', 10);
            $table->integer('revisadot6')->nullable();
            $table->integer('anulart6')->nullable();
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
        Schema::dropIfExists('T6');
    }
}
