<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigselectT52 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mig_selectT52', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->integer('codMarca_id')->unsigned();
            $table->foreign('codMarca_id')->references('id')->on('mig_selectT51');
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
        Schema::dropIfExists('mig_selectT52');
    }
}
