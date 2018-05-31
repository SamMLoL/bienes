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
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_concurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_directa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_confiscacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
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

        /*Schema::create('sel_responsables1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });*/

        Schema::create('sel_estatusbien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_condicionbien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_garantiabien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_colorbien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_clasebien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_tipoanimal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_proposito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_medidapeso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_genero', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });
//ANEXOS S
        Schema::create('sel_paises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codPais');
            $table->string('pais');
            $table->timestamps();
        });

        Schema::create('sel_parroquias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codParroquia');
            $table->string('parroquia');
            $table->timestamps();
        });

        Schema::create('sel_ciudad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codCiudad');
            $table->string('ciudad');
            $table->timestamps();
        });

        Schema::create('sel_usos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

//ANEXO S4
#SEDES
        Schema::create('sel_sedes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('sel_piso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

//ANEXO S5
        Schema::create('sel_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('unidad');
            $table->timestamps();
        });

        Schema::create('sel_categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoria');
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
        Schema::dropIfExists('Selectores');
    }
}
