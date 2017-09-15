<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigselectT3 extends Migration
{
   
    public function up()
    {
        Schema::create('mig_selectT3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });
    }

    /*
    Compañia aseguradora select => compAse
     */
    public function down()
    {
        Schema::dropIfExists('migselectT3');
    }
}
