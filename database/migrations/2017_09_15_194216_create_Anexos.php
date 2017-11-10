<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codProvee', 10)->nullable();
            $table->string('descProvee', 100)->nullable();
            $table->integer('tipProvee')->nullable();
            $table->string('rifProvee', 20)->nullable();
            $table->string('otraDesc', 200)->nullable();
            $table->integer('revisadot1')->nullable();
            $table->integer('anulart1')->nullable();
            $table->timestamps();
        });

        Schema::create('concurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOrigen', 12)->nullable();
            $table->string('codAdquisicion', 2)->nullable();
            $table->string('nomConcurso', 255)->nullable();
            $table->string('numConcurso', 30)->nullable();
            $table->date('feConcurso', 10)->nullable();
            $table->string('codProveedor', 10)->nullable();
            $table->string('numContrato', 30)->nullable();
            $table->date('feContrato', 10)->nullable();
            $table->string('numNotaEntre', 30)->nullable();
            $table->date('feNotaEntre', 10)->nullable();
            $table->string('numFactura', 30)->nullable();
            $table->date('feFactura', 10)->nullable();
            $table->integer('revisadot2')->nullable();
            $table->integer('anulart2')->nullable();
            $table->timestamps();
        });

        Schema::create('directa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_1', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('codPro', 10)->nullable();
            $table->string('numCom', 30)->nullable();
            $table->string('numNota', 30)->nullable();
            $table->string('numFac', 30)->nullable();
            $table->date('feCom', 10)->nullable();
            $table->date('feNota', 10)->nullable();
            $table->date('feFac', 30)->nullable();
            $table->integer('revisadot21')->nullable();
            $table->integer('anulart21')->nullable();
            $table->timestamps();
        });

        Schema::create('confiscacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_2', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomPa', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('nomAuto', 100)->nullable();
            $table->string('numSenc', 30)->nullable();
            $table->string('nomRegno', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio');
            $table->date('feSenc', 10)->nullable();
            $table->date('feReg', 8)->nullable();
            $table->integer('revisadot22')->nullable();
            $table->integer('anulart22')->nullable();
            $table->timestamps();
        });

        Schema::create('dacionPago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_3', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomCed', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('numFin', 30)->nullable();
            $table->date('feFin', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot23')->nullable();
            $table->integer('anulart23')->nullable();
            $table->timestamps();
        });

        Schema::create('donacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_4', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomDona', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('numConac', 30)->nullable();
            $table->date('feConac', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot24')->nullable();
            $table->integer('anulart24')->nullable();
            $table->timestamps();
        });

        Schema::create('expropiacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_5', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomPan', 100)->nullable();
            $table->string('nomBen', 100)->nullable();
            $table->string('nomAut', 100)->nullable();
            $table->string('numSena', 30)->nullable();
            $table->date('feSena', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot25')->nullable();
            $table->integer('anulart25')->nullable();
            $table->timestamps();
        });

        Schema::create('permuta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_6', 12)->nullable();
            $table->string('codAdq', 2);
            $table->string('nomCope', 100);
            $table->string('nomBen', 100);
            $table->string('nomLic', 255);
            $table->string('numLic', 30);
            $table->date('feLic', 10);
            $table->string('numCon', 30);
            $table->date('feCon', 10);
            $table->string('nomRegn', 100);
            $table->string('tomo', 20);
            $table->integer('folio');
            $table->date('feReg', 10);
            $table->integer('revisadot26')->nullable();
            $table->integer('anulart26')->nullable();
            $table->timestamps();
        });

        Schema::create('transferencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_7', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->string('nomQtra', 200)->nullable();
            $table->string('nomBen', 200)->nullable();
            $table->string('numAuto', 30)->nullable();
            $table->date('feAuto', 10)->nullable();
            $table->string('nomRegn', 100)->nullable();
            $table->string('tomo', 20)->nullable();
            $table->integer('folio')->nullable();
            $table->date('feReg', 10)->nullable();
            $table->integer('revisadot27')->nullable();
            $table->integer('anulart27')->nullable();
            $table->timestamps();
        });

        Schema::create('adjudicacion', function (Blueprint $table) {
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

        Schema::create('seguros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codRegT3', 10)->nullable();
            $table->string('compAse', 5)->nullable();
            $table->string('otraCom', 100)->nullable();
            $table->string('numPoli', 30)->nullable();
            $table->string('tipPoli', 1)->nullable();
            $table->string('montoAse',26)->nullable();
            $table->integer('moneda')->nullable();
            $table->string('espMone', 30)->nullable();
            $table->date('feiniPoli', 10)->nullable();
            $table->date('fefinPoli', 10)->nullable();
            $table->string('poseRes', 2)->nullable();
            $table->string('tipoCobe', 5)->nullable();
            $table->string('espeCobe', 100)->nullable();
            $table->string('descCobe', 200)->nullable();
            $table->integer('revisadot3')->nullable();
            $table->integer('anulart3')->nullable();
            $table->timestamps();
        });

        Schema::create('responsables', function (Blueprint $table) {
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

        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codMarca', 100)->nullable();
            $table->string('denCoMar', 100)->nullable();
            $table->string('nomFabri', 100)->nullable();
            $table->integer('revisadot5')->nullable();
            $table->integer('anulart5')->nullable();
            $table->timestamps();
        });

       /* Schema::create('T6', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codModel', 10)->nullable();
            $table->string('denModFab', 100)->nullable();
            $table->string('codMarca', 10)->nullable();
            $table->string('codSegModel', 10)->nullable();
            $table->integer('revisadot6')->nullable();
            $table->integer('anulart6')->nullable();
            $table->timestamps();
        });*/


        Schema::create('bitacora', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            $table->integer('accion')->unsigned();
            $table->foreign('accion')->references('id')->on('acciones');
            $table->string('referencia')->nullable();
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
        Schema::dropIfExists('Anexos');
    }
}
