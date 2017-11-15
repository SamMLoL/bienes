<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            
        });

        Schema::create('sel_proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('sel_concurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('sel_directa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('sel_confiscacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('sel_dacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_donacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_expropiacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_permuta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_transferencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_adjudicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_seguros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_seguros1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_seguros2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_seguros3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_seguros4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_responsables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_responsables1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });


        //Las 3 tablas sel_marca, sel_marca1, sel_marca2 relacionadas para añadir nuevas marcas a los select del formulario regmarca <-- ruta del web
        Schema::create('sel_marca', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_marca1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->integer('relacion')->unsigned();
            $table->foreign('relacion')->references('id')->on('sel_marca');
            $table->timestamps();
        });

        Schema::create('sel_marca2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->integer('relacion')->unsigned();
            $table->foreign('relacion')->references('id')->on('sel_marca1');
            $table->timestamps();
        });

        /*Schema::create('mig_selectT6', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT61', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT62', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT63', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Selectores');
    }
}
