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

        Schema::create('T1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_proveedor_t1', 10)->nullable();
            $table->string('desc_prove_t1', 100)->nullable();
            $table->integer('tip_prove_t1')->nullable();
            $table->string('t1_rif', 20)->nullable();
            $table->string('otr_descr_t1', 200)->nullable();
            $table->integer('revisadot1')->nullable();
            $table->integer('anulart1')->nullable();
            $table->timestamps();
        });

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

        Schema::create('T21', function (Blueprint $table) {
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

        Schema::create('T22', function (Blueprint $table) {
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

        Schema::create('T23', function (Blueprint $table) {
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

        Schema::create('T24', function (Blueprint $table) {
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

        Schema::create('T25', function (Blueprint $table) {
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

        Schema::create('T26', function (Blueprint $table) {
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
            $table->integer('revisadot26');
            $table->integer('anulart26');
            $table->timestamps();
        });

        Schema::create('T27', function (Blueprint $table) {
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

        Schema::create('T28', function (Blueprint $table) {
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

        Schema::create('T3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codRegT3', 10)->nullable();
            $table->string('compAse', 5)->nullable();
            $table->string('otraCom', 100)->nullable();
            $table->string('numPoli', 30)->nullable();
            $table->string('tipPoli', 1)->nullable();
            $table->string('montoAse', 27)->nullable();
            $table->string('moneda', 5)->nullable();
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

        Schema::create('T5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codMarca', 100)->nullable();
            $table->string('denCoMar', 100)->nullable();
            $table->string('nomFabri', 100)->nullable();
            $table->integer('revisadot5')->nullable();
            $table->integer('anulart5')->nullable();
            $table->timestamps();
        });

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
        Schema::dropIfExists('Anexos');
    }
}
