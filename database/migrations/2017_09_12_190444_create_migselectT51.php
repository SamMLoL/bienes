<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigselectT51 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mig_selectT51', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
             $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('mig_selectT5');
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
        Schema::dropIfExists('mig_selectT51');
    }
}
