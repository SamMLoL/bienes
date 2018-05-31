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
        //ANEXOS T estatuBien
        #T1
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codProvee', 10)->nullable();
            $table->string('descProvee', 100)->nullable();
            $table->integer('tipProvee')->nullable();
            $table->integer('grupo')->nullable();
            $table->string('rifProvee', 20)->nullable();
            $table->string('otraDesc', 200)->nullable();
            $table->integer('revisadot1')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        //MODALIDADES
        #T2
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.1
        Schema::create('directa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_1', 12)->nullable();
            $table->string('codAdq', 2)->nullable();
            $table->integer('codProvee')->unsigned();
            $table->foreign('codProvee')->references('id')->on('proveedores');
            $table->string('numCom', 30)->nullable();
            $table->string('numNota', 30)->nullable();
            $table->string('numFac', 30)->nullable();
            $table->date('feCom', 10)->nullable();
            $table->date('feNota', 10)->nullable();
            $table->date('feFac', 30)->nullable();
            $table->integer('revisadot21')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.2
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.3
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.4
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.5
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.6
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.7
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
            $table->softDeletes();
            $table->timestamps();
        });

        #T2.8
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
            $table->softDeletes();
            $table->timestamps();
        });

        //ANEXOS T
        #T3
        Schema::create('seguros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codRegT3', 10)->nullable();
            $table->string('compAse', 5)->nullable();
            $table->string('otraCom', 100)->nullable();
            $table->string('numPoli', 30)->nullable();
            $table->string('tipPoli', 1)->nullable();
            $table->string('montoAse',26)->nullable();
            $table->integer('moneda')->unsigned();
            $table->foreign('moneda')->references('id')->on('sel_seguros2');
            $table->string('espeMoneda', 30)->nullable();
            $table->date('feiniPoli', 10)->nullable();
            $table->date('fefinPoli', 10)->nullable();
            $table->string('poseRes', 2)->nullable();
            $table->string('tipoCobe', 5)->nullable();
            $table->string('espeCobe', 100)->nullable();
            $table->string('descCobe', 200)->nullable();
            $table->integer('revisadot3')->nullable();
            $table->softDeletes();
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
            $table->string('codUnidad', 10)->nullable();
            $table->integer('revisadot4')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codMarca', 10)->nullable();
            $table->string('denComar', 100)->nullable();
            $table->string('nomFabri', 100)->nullable();
            $table->integer('revisadot5')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codModel', 10)->nullable();
            $table->string('denModFab', 100)->nullable();
            $table->integer('codMarca')->unsigned();
            $table->foreign('codMarca')->references('id')->on('marcas');
            $table->string('codSegModel', 10)->nullable();
            $table->integer('revisadot6')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('componentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 10)->nullable();
            $table->string('denComponente', 100)->nullable();
            $table->string('codBienMueble', 10)->nullable();
            $table->integer('revisadot7')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codOt2_1', 12)->nullable();
            $table->string('codCata', 10)->nullable();
            $table->integer('codUnidad')->nullable();
            $table->foreign('codUnidad')->references('id')->on('sel_unidades');
            $table->string('sedeOrgano', 10)->nullable();
            $table->string('codRespAdm', 10)->nullable();
            $table->string('codResBien', 10)->nullable();
            $table->string('codInterno', 20)->nullable();
            $table->integer('estatuBien')->nullable();
            $table->foreign('estatuBien')->references('id')->on('sel_estatusbien');
            $table->string('espOtroUso', 100)->nullable();
            $table->string('valorAdq', 26)->nullable();
            $table->integer('moneda')->unsigned();
            $table->foreign('moneda')->references('id')->on('sel_seguros2');
            $table->string('espeMoneda', 30)->nullable();
            $table->date('feAdqBien', 10)->nullable();
            $table->date('feIngBien', 10)->nullable();
            $table->integer('edoBien')->nullable();
            $table->string('espOtroEdo', 30)->nullable();
            $table->string('descEdoBien', 255)->nullable();
            $table->string('serialBien', 50)->nullable();
            $table->integer('codMarca')->unsigned();
            $table->foreign('codMarca')->references('id')->on('marcas');
            $table->integer('codModel')->unsigned();
            $table->foreign('codModel')->references('id')->on('modelos');
            $table->string('anoFabriBien')->nullable();
            $table->integer('codColorBien')->nullable();
            $table->foreign('codColorBien')->references('id')->on('sel_colorbien');
            $table->string('espeColor', 50)->nullable();
            $table->string('otraEspeColor', 255)->nullable();
            $table->string('espeTecBien', 255)->nullable();
            $table->string('otraDescBien', 255)->nullable();
            $table->string('garantia',20)->nullable();
            $table->integer('unidadMedi')->unsigned();
            $table->foreign('unidadMedi')->references('id')->on('sel_garantiabien');
            $table->date('feIniGarantia', 10)->nullable();
            $table->date('feFinGarantia', 10)->nullable();
            $table->integer('poseeCompo')->unsigned();
            $table->integer('seguroBien')->nullable();
            $table->foreign('seguroBien')->references('id')->on('sel_seguros3');
            $table->string('codRegSeguro', 10)->nullable();
            $table->integer('revisadot8')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('transporte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codBien', 12)->nullable();
            $table->string('codCata', 10)->nullable();
            $table->integer('codUnidad')->nullable();
            $table->foreign('codUnidad')->references('id')->on('sel_unidades');
            $table->string('sedeOrgano', 10)->nullable();
            $table->string('codRespAdm', 10)->nullable();
            $table->string('codResBien', 10)->nullable();
            $table->string('codInterno', 20)->nullable();
            $table->integer('estatuBien')->nullable();
            $table->foreign('estatuBien')->references('id')->on('sel_estatusbien');
            $table->string('espOtroUso', 100)->nullable();
            $table->string('valorAdq', 26)->nullable();
            $table->integer('moneda')->unsigned();
            $table->foreign('moneda')->references('id')->on('sel_seguros2');
            $table->string('espeMoneda', 30)->nullable();
            $table->date('feAdqBien', 10)->nullable();
            $table->date('feIngBien', 10)->nullable();
            $table->integer('edoBien')->nullable();
            $table->string('espOtroEdo', 30)->nullable();
            $table->string('descEdoBien', 200)->nullable();
            $table->integer('claseBien')->nullable();
            $table->string('espeClase', 100)->nullable();
            $table->integer('codMarca')->unsigned();
            $table->foreign('codMarca')->references('id')->on('marcas');
            $table->integer('codModel')->unsigned();
            $table->foreign('codModel')->references('id')->on('modelos');
            $table->string('anoFabriBien')->nullable();
            $table->string('serialCarro', 50)->nullable();
            $table->string('serialMotor', 50)->nullable();
            $table->string('placaBien', 20)->nullable();
            $table->string('numTituPro', 30)->nullable();
            $table->integer('codColorBien')->nullable();
            $table->foreign('codColorBien')->references('id')->on('sel_colorbien');
            $table->string('espeColor', 50)->nullable();
            $table->string('otraEspeColor', 255)->nullable();
            $table->string('capacidadBien', 50)->nullable();
            $table->string('nomDadoBien', 100)->nullable();
            $table->string('usoBien', 100)->nullable();
            $table->string('espeTecBien', 255)->nullable();
            $table->string('otraEspeBien', 255)->nullable();
            $table->string('garantia', 20)->nullable();
            $table->integer('unidadMedi')->unsigned();
            $table->foreign('unidadMedi')->references('id')->on('sel_garantiabien');
            $table->date('feIniGarantia', 10)->nullable();
            $table->date('feFinGarantia', 10)->nullable();
            $table->integer('tieneSistema')->nullable();
            $table->foreign('tieneSistema')->references('id')->on('sel_seguros3');
            $table->string('espeSistema', 255)->nullable();
            $table->integer('poseeCompo')->unsigned();
            $table->foreign('poseeCompo')->references('id')->on('sel_seguros3');
            $table->integer('seguroBien')->nullable();
            $table->foreign('seguroBien')->references('id')->on('sel_seguros3');
            $table->string('codRegSeguro', 10)->nullable();
            $table->integer('revisadot9')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('semovientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codBien', 12)->nullable();
            $table->string('codCata', 10)->nullable();
            $table->integer('codUnidad')->nullable();
            $table->foreign('codUnidad')->references('id')->on('sel_unidades');
            $table->string('sedeOrgano', 10)->nullable();
            $table->string('codRespAdm', 10)->nullable();
            $table->string('codResBien', 10)->nullable();
            $table->string('codInterno', 20)->nullable();
            $table->integer('estatuBien')->nullable();
            $table->foreign('estatuBien')->references('id')->on('sel_estatusbien');
            $table->string('espOtroUso', 100)->nullable();
            $table->string('valorAdq', 26)->nullable();
            $table->integer('moneda')->unsigned();
            $table->foreign('moneda')->references('id')->on('sel_seguros2');
            $table->string('espeMoneda', 30)->nullable();
            $table->date('feAdqBien', 10)->nullable();
            $table->date('feIngBien', 10)->nullable();
            $table->integer('edoBien')->nullable();
            $table->string('espOtroEdo', 30)->nullable();
            $table->string('descEdoBien', 255)->nullable();
            $table->string('raza', 50)->nullable();
            $table->integer('genero')->nullable();
            $table->integer('tipoAnimal')->nullable();
            $table->foreign('tipoAnimal')->references('id')->on('sel_tipoanimal');
            $table->string('espeOtroTipo', 100)->nullable();
            $table->integer('proposito')->nullable();
            $table->foreign('proposito')->references('id')->on('sel_proposito');
            $table->string('espeOtroPro', 100)->nullable();
            $table->integer('codColorBien')->nullable();
            $table->foreign('codColorBien')->references('id')->on('sel_colorbien');
            $table->string('espeColor', 50)->nullable();
            $table->string('otraEspeColor', 255)->nullable();
            $table->string('peso', 18)->nullable();
            $table->integer('unidadPeso')->nullable();
            $table->foreign('unidadPeso')->references('id')->on('sel_medidapeso');
            $table->date('feNacimiento', 10)->nullable();
            $table->string('numHierro', 15)->nullable();
            $table->string('seParticulares', 255)->nullable();
            $table->string('otrasEspecifi', 255)->nullable();
            $table->integer('seguroBien')->nullable();
            $table->foreign('seguroBien')->references('id')->on('sel_seguros3');
            $table->string('codRegSeguro', 10)->nullable();
            $table->integer('revisadot10')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('datosbienes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codBien', 20)->nullable();
            $table->string('codCompo', 20)->nullable();
            $table->string('serialCompo', 30)->nullable();
            $table->string('codTipoCompo', 10)->nullable();
            $table->integer('codMarca')->unsigned();
            $table->foreign('codMarca')->references('id')->on('marcas');
            $table->integer('codModel')->unsigned();
            $table->foreign('codModel')->references('id')->on('modelos');
            $table->string('descCompo', 255)->nullable();
            $table->integer('revisadot11')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('datosinmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codBien', 12)->nullable();
            $table->string('codCata', 10)->nullable();
            $table->integer('codUnidad')->nullable();
            $table->foreign('codUnidad')->references('id')->on('sel_unidades');
            $table->string('codRespAdm', 10)->nullable();
            $table->integer('corresBien')->nullable();
            $table->foreign('corresBien')->references('id')->on('sel_seguros3');
            $table->string('codSede', 10)->nullable();
            $table->integer('localizacion')->nullable();
            $table->foreign('localizacion')->references('id')->on('sel_proveedores');
            $table->integer('codPais')->nullable();
            $table->foreign('codPais')->references('id')->on('sel_paises');
            $table->string('espeOtroPais', 100)->nullable();
            $table->integer('codParroquia')->nullable();
            $table->foreign('codParroquia')->references('id')->on('sel_parroquias');
            $table->integer('codCiudad')->nullable();
            $table->foreign('codCiudad')->references('id')->on('sel_ciudad');
            $table->string('espeOtroCiudad', 100)->nullable();
            $table->string('urbanizacion', 30)->nullable();
            $table->string('calleAvenida', 50)->nullable();
            $table->string('casaEdificio', 30)->nullable();
            $table->string('codInterno', 20)->nullable();
            $table->integer('estatuBien')->nullable();
            $table->foreign('estatuBien')->references('id')->on('sel_estatusbien');
            $table->string('espOtroUso', 100)->nullable();
            $table->string('valorAdq', 26)->nullable();
            $table->integer('moneda')->unsigned();
            $table->foreign('moneda')->references('id')->on('sel_seguros2');
            $table->string('espeMoneda', 30)->nullable();
            $table->date('feAdqBien', 10)->nullable();
            $table->date('feIngBien', 10)->nullable();
            $table->integer('edoBien')->nullable();
            $table->string('espOtroEdo', 30)->nullable();
            $table->string('descEdoBien', 255)->nullable();
            $table->integer('usoBienInmu')->unsigned();
            $table->foreign('usoBienInmu')->references('id')->on('sel_usos');
            $table->string('otroUsoInmu', 100)->nullable();
            $table->string('ofiRegistro', 255)->nullable();
            $table->string('refRegistro', 255)->nullable();
            $table->integer('tomo')->nullable();
            $table->integer('folio')->nullable();
            $table->string('protocolo', 20)->nullable();
            $table->string('numRegistro', 20)->nullable();
            $table->date('feRegistro', 10)->nullable();
            $table->string('propieAnt', 200)->nullable();
            $table->string('depenIntegra', 255)->nullable();
            $table->string('areaConstru', 22)->nullable();
            $table->integer('unidadConstru')->nullable();
            $table->foreign('unidadConstru')->references('id')->on('sel_medidapeso');
            $table->string('espeOtraUnidad', 100)->nullable();
            $table->string('areaTerreno', 23)->nullable();
            $table->integer('unidadTerreno')->nullable();
            $table->foreign('unidadTerreno')->references('id')->on('sel_medidapeso');
            $table->string('espeOtraTerre', 100)->nullable();
            $table->string('otrasEspecifi', 255)->nullable();
            $table->integer('seguroBien')->nullable();
            $table->foreign('seguroBien')->references('id')->on('sel_seguros3');
            $table->string('codRegSeguro', 10)->nullable();
            $table->integer('revisadot12')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        //ANEXOS S
        #S1
        Schema::create('basicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codSigecof', 17)->nullable();
            $table->string('siglas', 15)->nullable();
            $table->integer('grupo')->nullable();
            $table->string('rifProvee', 20)->nullable();
            $table->string('razonSocial', 255)->nullable();
            $table->string('telfEnte', 20)->nullable();
            $table->string('direcWeb', 100)->nullable();
            $table->string('correEnte', 100)->nullable();
            $table->date('feGaceta', 10)->nullable();
            $table->string('numGaceta', 10)->nullable();
            $table->integer('revisadoS1')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        #S2
        Schema::create('maxima', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('apellido', 100)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('cargo', 100)->nullable();
            $table->string('correo', 100)->nullable();
            $table->string('numGaceta', 10)->nullable();
            $table->date('feGaceta', 10)->nullable();
            $table->string('numDecre', 10)->nullable();
            $table->date('feDecre', 10)->nullable();
            $table->integer('revisadoS2')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        #S3
        Schema::create('patrimonial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('apellido', 100)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('cargo', 100)->nullable();
            $table->string('correo', 100)->nullable();
            $table->string('numGaceta', 10)->nullable();
            $table->date('feGaceta', 10)->nullable();
            $table->string('numDecre', 10)->nullable();
            $table->date('feDecre', 10)->nullable();
            $table->integer('revisadoS3')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        #S4
        Schema::create('sedes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codSede',10)->nullable();
            $table->integer('tipoSede')->nullable();
            $table->foreign('tipoSede')->references('id')->on('sel_sedes');
            $table->string('espeSede', 100)->nullable();
            $table->string('descSede', 255)->nullable();
            $table->integer('localizacion')->nullable();
            $table->foreign('localizacion')->references('id')->on('sel_proveedores');
            $table->integer('codPais')->nullable();
            $table->foreign('codPais')->references('id')->on('sel_paises');
            $table->string('espeOtroPais', 100)->nullable();
            $table->integer('codParroquia')->nullable();
            $table->foreign('codParroquia')->references('id')->on('sel_parroquias');
            $table->integer('codCiudad')->nullable();
            $table->foreign('codCiudad')->references('id')->on('sel_ciudad');
            $table->string('espeOtroCiudad', 100)->nullable();
            $table->string('urbanizacion', 30)->nullable();
            $table->string('calleAvenida', 50)->nullable();
            $table->string('casaEdificio', 30)->nullable();
            $table->string('piso', 20)->nullable();
            $table->integer('revisadoS4')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        #S5
        Schema::create('unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codUnidad');
            $table->string('descUnidad', 255)->nullable();
            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('sel_categoria');
            $table->string('espeCatego', 100)->nullable();
            $table->string('codAdscrita', 10)->nullable();
            $table->integer('revisadoS5')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('bitacora', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            $table->integer('accion')->unsigned();
            $table->foreign('accion')->references('id')->on('acciones');
            $table->string('referencia')->nullable();
            $table->softDeletes();
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
