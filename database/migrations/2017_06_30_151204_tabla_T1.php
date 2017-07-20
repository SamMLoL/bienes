<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_proveedor_t1', 10)->nullable();
            $table->string('desc_prove_t1', 100)->nullable();
            $table->integer('tip_prove_t1')->nullable();
            $table->string('t1_rif', 20)->nullable();
            $table->string('otr_descr_t1', 200)->nullable();
            $table->integer('revisado')->nullable();
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
        Schema::dropIfExists('T1');
    }
}
