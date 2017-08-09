<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaT2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t2_cod_origen', 12)->nullable();
            $table->string('cod_adquisicion_t2', 2)->nullable();
            $table->string('nom_concurso_t2', 255)->nullable();
            $table->string('n_concurso_t2', 30)->nullable();
            $table->date('fe_concurso_t2', 10)->nullable();
            $table->string('cod_proveedor_t2', 10)->nullable();
            $table->string('n_contracto_t2', 30)->nullable();
            $table->date('fe_contracto_t2', 10)->nullable();
            $table->string('n_notaentrega_t2', 30)->nullable();
            $table->date('fe_nota_entrega_t2', 10)->nullable();
            $table->string('n_factura_t2', 30)->nullable();
            $table->date('fe_factura_t2', 10)->nullable();
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
        Schema::dropIfExists('T2');
    }
}
