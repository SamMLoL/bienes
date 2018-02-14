<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloEqtransporte;
use App\sel_responsables1;
use App\sel_estatusbien;
use App\sel_seguros2;
use App\sel_condicionbien;
use App\modeloMarcas;
use App\modeloModelos;
use App\sel_colorbien;
use App\sel_garantiabien;
use App\sel_seguros3;
use App\sel_clasebien;
use App\modeloBitacora;

class controladorEqtransporte extends Controller
{
    public function index()
    {
    	$lastCod = modeloEqtransporte::select('codBien')->get()->last();
    	$dependecia = sel_responsables1::all();
    	$estatusBien = sel_estatusbien::orderBy('opcion')->get();
    	$moneda = sel_seguros2::all();
    	$condicion = sel_condicionbien::orderBy('opcion')->get();
    	$marcas = modeloMarcas::all();
      $modelos = modeloModelos::all();
      $colorBien = sel_colorbien::orderBy('opcion')->get();
      $unidadGarantia = sel_garantiabien::orderBy('opcion')->get();
      $poseeComponente = sel_seguros3::all();
      $claseBien = sel_clasebien::all();


        return view('AnexosT.visEqtransporte', compact('lastCod','dependecia','estatusBien','moneda','condicion','marcas','modelos','colorBien','unidadGarantia','poseeComponente','claseBien'));
    }

    public function store(Request $request)
    {
         $form_t9=new modeloEqtransporte();
         $form_t9->codBien = $request->codBien;
         $form_t9->depAdmRes = $request->depAdmRes;
         $form_t9->estatuBien = $request->estatuBien;
         $form_t9->moneda = $request->moneda;
         $form_t9->edoBien = $request->edoBien;
         $form_t9->claseBien = $request->claseBien;
         $form_t9->codMarca = $request->codMarca;
         $form_t9->codModel = $request->codModel;
         $form_t9->codColorBien = $request->codColorBien;
         $form_t9->unidadMedi = $request->unidadMedi;
         $form_t9->tieneSistema = $request->tieneSistema;
         $form_t9->poseeCompo = $request->poseeCompo;
         $form_t9->seguroBien = $request->seguroBien;
         $form_t9->revisadot9 = 1;

        if($form_t9->codCata = $request->codCata == '')
         {
          $form_t9->codCata = '1';

         }else{
          $form_t9->codCata = $request->codCata;
         }

         if($form_t9->sedeOrgano = $request->sedeOrgano == '')
         {
          $form_t9->sedeOrgano = '1';

         }else{
          $form_t9->sedeOrgano = $request->sedeOrgano;
         }

         if($form_t9->codRespAdm = $request->codRespAdm == '')
         {
          $form_t9->codRespAdm = '1';

         }else{
          $form_t9->codRespAdm = $request->codRespAdm;
         }

         if($form_t9->codResBien = $request->codResBien == '')
         {
          $form_t9->codResBien = '1';

         }else{
          $form_t9->codResBien = $request->codResBien;
         }

         if($form_t9->codInterno = $request->codInterno == '')
         {
          $form_t9->codInterno = '1';

         }else{
          $form_t9->codInterno = $request->codInterno;
         }

         if($form_t9->espOtroUso = $request->espOtroUso == '')
         {
          $form_t9->espOtroUso = '1';

         }else{
          $form_t9->espOtroUso = $request->espOtroUso;
         }

         if($form_t9->valorAdq = $request->valorAdq == '')
         {
          $form_t9->valorAdq = '0';

         }else{
          $form_t9->valorAdq = $request->valorAdq;
         }

         if($form_t9->espeMoneda = $request->espeMoneda == '')
         {
          $form_t9->espeMoneda = '1';

         }else{
          $form_t9->espeMoneda = $request->espeMoneda;
         }

         if($form_t9->anoFabriBien = $request->anoFabriBien == ''){
         
          $form_t9->anoFabriBien = '0';

         }else{
          $form_t9->anoFabriBien = $request->anoFabriBien;
         }

         if($form_t9->feAdqBien = $request->feAdqBien == ''){
          $form_t9->feAdqBien = '11111111';
          }else{
          $form_t9->feAdqBien = $request->feAdqBien;  
         }

        if($form_t9->feIngBien = $request->feIngBien == ''){
          $form_t9->feIngBien = '11111111';
          }else{
          $form_t9->feIngBien = $request->feIngBien;  
         }

        if($form_t9->espOtroEdo = $request->espOtroEdo == '')
         {
          $form_t9->espOtroEdo = '1';

         }else{
          $form_t9->espOtroEdo = $request->espOtroEdo;
        }

        if($form_t9->descEdoBien = $request->descEdoBien == '')
         {
          $form_t9->descEdoBien = '1';

         }else{
          $form_t9->descEdoBien = $request->descEdoBien;
        }

        if($form_t9->espeClase = $request->espeClase == '')
         {
          $form_t9->espeClase = '1';

         }else{
          $form_t9->espeClase = $request->espeClase;
        }

        if($form_t9->serialCarro = $request->serialCarro == '')
         {
          $form_t9->serialCarro = '1';

         }else{
          $form_t9->serialCarro = $request->serialCarro;
        }

        if($form_t9->serialMotor = $request->serialMotor == '')
         {
          $form_t9->serialMotor = '1';

         }else{
          $form_t9->serialMotor = $request->serialMotor;
        }

        if($form_t9->serialMotor = $request->serialMotor == '')
         {
          $form_t9->serialMotor = '1';

         }else{
          $form_t9->serialMotor = $request->serialMotor;
        }

        if($form_t9->placaBien = $request->placaBien == '')
         {
          $form_t9->placaBien = '1';

         }else{
          $form_t9->placaBien = $request->placaBien;
        }

        if($form_t9->numTituPro = $request->numTituPro == '')
         {
          $form_t9->numTituPro = '1';

         }else{
          $form_t9->numTituPro = $request->numTituPro;
        }

        if($form_t9->espeColor = $request->espeColor == '')
         {
          $form_t9->espeColor = '1';

         }else{
          $form_t9->espeColor = $request->espeColor;
        }

        if($form_t9->espeColor = $request->espeColor == '')
         {
          $form_t9->espeColor = '1';

         }else{
          $form_t9->espeColor = $request->espeColor;
        }

        if($form_t9->otraEspeColor = $request->otraEspeColor == '')
         {
          $form_t9->otraEspeColor = '1';

         }else{
          $form_t9->otraEspeColor = $request->otraEspeColor;
        }

        if($form_t9->capacidadBien = $request->capacidadBien == '')
         {
          $form_t9->capacidadBien = '1';

         }else{
          $form_t9->capacidadBien = $request->capacidadBien;
        }

        if($form_t9->nomDadoBien = $request->nomDadoBien == '')
         {
          $form_t9->nomDadoBien = '1';

         }else{
          $form_t9->nomDadoBien = $request->nomDadoBien;
        }

        if($form_t9->usoBien = $request->usoBien == '')
         {
          $form_t9->usoBien = '1';

         }else{
          $form_t9->usoBien = $request->usoBien;
        }

        if($form_t9->espeTecBien = $request->espeTecBien == '')
         {
          $form_t9->espeTecBien = '1';

         }else{
          $form_t9->espeTecBien = $request->espeTecBien;
        }

        if($form_t9->otraEspeBien = $request->otraEspeBien == '')
         {
          $form_t9->otraEspeBien = '1';

         }else{
          $form_t9->otraEspeBien = $request->otraEspeBien;
        }

        if($form_t9->garantia = $request->garantia == '')
         {
          $form_t9->garantia = '1';

         }else{
          $form_t9->garantia = $request->garantia;
        }

        if($form_t9->feIniGarantia = $request->feIniGarantia == ''){
          $form_t9->feIniGarantia = '11111111';
          }else{
          $form_t9->feIniGarantia = $request->feIniGarantia;  
        }

        if($form_t9->feFinGarantia = $request->feFinGarantia == ''){
          $form_t9->feFinGarantia = '11111111';
          }else{
          $form_t9->feFinGarantia = $request->feFinGarantia;  
        }

        if($form_t9->espeSistema = $request->espeSistema == '')
         {
          $form_t9->espeSistema = '1';

         }else{
          $form_t9->espeSistema = $request->espeSistema;
        }

        if($form_t9->codRegSeguro = $request->codRegSeguro == '')
         {
          $form_t9->codRegSeguro = '1';

         }else{
          $form_t9->codRegSeguro = $request->codRegSeguro;
        }

        if($form_t9->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Equipo de Transporte';
          $bit->save();

        }

        return back()->with('msj', 'Datos Registrados Exitosamente');


    }

    public function edit($id)
    {
        $form_t9 = modeloEqtransporte::find($id);
        $lastCod = modeloEqtransporte::select('codBien')->get()->last();
        $dependecia = sel_responsables1::all();
        $estatusBien = sel_estatusbien::all();
        $moneda = sel_seguros2::all();
        $condicion = sel_condicionbien::all();
        $marcas = modeloMarcas::all();
        $modelos = modeloModelos::all();
        $colorBien = sel_colorbien::all();
        $unidadGarantia = sel_garantiabien::all();
        $poseeComponente = sel_seguros3::all();
        $claseBien = sel_clasebien::all();

       return view('layouts.ModificarAnexosT.modificarEqtransporte',compact('form_t9','lastCod','dependecia','estatusBien','estatusBien','moneda','condicion','marcas','modelos','colorBien','unidadGarantia','poseeComponente','claseBien'));
    }

     public function update(Request $request, $id)
     {   
         $form_t9= modeloEqtransporte::find($id);
         $form_t9->codBien = $request->codBien;
         $form_t9->depAdmRes = $request->depAdmRes;
         $form_t9->estatuBien = $request->estatuBien;
         $form_t9->moneda = $request->moneda;
         $form_t9->edoBien = $request->edoBien;
         $form_t9->claseBien = $request->claseBien;
         $form_t9->codMarca = $request->codMarca;
         $form_t9->codModel = $request->codModel;
         $form_t9->codColorBien = $request->codColorBien;
         $form_t9->unidadMedi = $request->unidadMedi;
         $form_t9->tieneSistema = $request->tieneSistema;
         $form_t9->poseeCompo = $request->poseeCompo;
         $form_t9->seguroBien = $request->seguroBien;

        if($form_t9->codCata = $request->codCata == '')
         {
          $form_t9->codCata = '1';

         }else{
          $form_t9->codCata = $request->codCata;
         }

         if($form_t9->sedeOrgano = $request->sedeOrgano == '')
         {
          $form_t9->sedeOrgano = '1';

         }else{
          $form_t9->sedeOrgano = $request->sedeOrgano;
         }

         if($form_t9->codRespAdm = $request->codRespAdm == '')
         {
          $form_t9->codRespAdm = '1';

         }else{
          $form_t9->codRespAdm = $request->codRespAdm;
         }

         if($form_t9->codResBien = $request->codResBien == '')
         {
          $form_t9->codResBien = '1';

         }else{
          $form_t9->codResBien = $request->codResBien;
         }

         if($form_t9->codInterno = $request->codInterno == '')
         {
          $form_t9->codInterno = '1';

         }else{
          $form_t9->codInterno = $request->codInterno;
         }

         if($form_t9->espOtroUso = $request->espOtroUso == '')
         {
          $form_t9->espOtroUso = '1';

         }else{
          $form_t9->espOtroUso = $request->espOtroUso;
         }

         if($form_t9->valorAdq = $request->valorAdq == '')
         {
          $form_t9->valorAdq = '0';

         }else{
          $form_t9->valorAdq = $request->valorAdq;
         }

         if($form_t9->espeMoneda = $request->espeMoneda == '')
         {
          $form_t9->espeMoneda = '1';

         }else{
          $form_t9->espeMoneda = $request->espeMoneda;
         }

         if($form_t9->feAdqBien = $request->feAdqBien == ''){
          $form_t9->feAdqBien = '11111111';

          }else{

          $form_t9->feAdqBien = $request->feAdqBien;  
         }

         if($form_t9->anoFabriBien = $request->anoFabriBien == ''){
         
          $form_t9->anoFabriBien = '0';

         }else{
          $form_t9->anoFabriBien = $request->anoFabriBien;
         }

        if($form_t9->feIngBien = $request->feIngBien == ''){
          $form_t9->feIngBien = '11111111';
          }else{
          $form_t9->feIngBien = $request->feIngBien;  
         }

        if($form_t9->espOtroEdo = $request->espOtroEdo == '')
         {
          $form_t9->espOtroEdo = '1';

         }else{
          $form_t9->espOtroEdo = $request->espOtroEdo;
        }

        if($form_t9->descEdoBien = $request->descEdoBien == '')
         {
          $form_t9->descEdoBien = '1';

         }else{
          $form_t9->descEdoBien = $request->descEdoBien;
        }

        if($form_t9->espeClase = $request->espeClase == '')
         {
          $form_t9->espeClase = '1';

         }else{
          $form_t9->espeClase = $request->espeClase;
        }

        if($form_t9->serialCarro = $request->serialCarro == '')
         {
          $form_t9->serialCarro = '1';

         }else{
          $form_t9->serialCarro = $request->serialCarro;
        }

        if($form_t9->serialMotor = $request->serialMotor == '')
         {
          $form_t9->serialMotor = '1';

         }else{
          $form_t9->serialMotor = $request->serialMotor;
        }

        if($form_t9->serialMotor = $request->serialMotor == '')
         {
          $form_t9->serialMotor = '1';

         }else{
          $form_t9->serialMotor = $request->serialMotor;
        }

        if($form_t9->placaBien = $request->placaBien == '')
         {
          $form_t9->placaBien = '1';

         }else{
          $form_t9->placaBien = $request->placaBien;
        }

        if($form_t9->numTituPro = $request->numTituPro == '')
         {
          $form_t9->numTituPro = '1';

         }else{
          $form_t9->numTituPro = $request->numTituPro;
        }

        if($form_t9->espeColor = $request->espeColor == '')
         {
          $form_t9->espeColor = '1';

         }else{
          $form_t9->espeColor = $request->espeColor;
        }

        if($form_t9->espeColor = $request->espeColor == '')
         {
          $form_t9->espeColor = '1';

         }else{
          $form_t9->espeColor = $request->espeColor;
        }

        if($form_t9->otraEspeColor = $request->otraEspeColor == '')
         {
          $form_t9->otraEspeColor = '1';

         }else{
          $form_t9->otraEspeColor = $request->otraEspeColor;
        }

        if($form_t9->capacidadBien = $request->capacidadBien == '')
         {
          $form_t9->capacidadBien = '1';

         }else{
          $form_t9->capacidadBien = $request->capacidadBien;
        }

        if($form_t9->nomDadoBien = $request->nomDadoBien == '')
         {
          $form_t9->nomDadoBien = '1';

         }else{
          $form_t9->nomDadoBien = $request->nomDadoBien;
        }

        if($form_t9->usoBien = $request->usoBien == '')
         {
          $form_t9->usoBien = '1';

         }else{
          $form_t9->usoBien = $request->usoBien;
        }

        if($form_t9->espeTecBien = $request->espeTecBien == '')
         {
          $form_t9->espeTecBien = '1';

         }else{
          $form_t9->espeTecBien = $request->espeTecBien;
        }

        if($form_t9->otraEspeBien = $request->otraEspeBien == '')
         {
          $form_t9->otraEspeBien = '1';

         }else{
          $form_t9->otraEspeBien = $request->otraEspeBien;
        }

        if($form_t9->garantia = $request->garantia == '')
         {
          $form_t9->garantia = '1';

         }else{
          $form_t9->garantia = $request->garantia;
        }

        if($form_t9->feIniGarantia = $request->feIniGarantia == ''){
          $form_t9->feIniGarantia = '11111111';
          }else{
          $form_t9->feIniGarantia = $request->feIniGarantia;  
        }

        if($form_t9->feFinGarantia = $request->feFinGarantia == ''){
          $form_t9->feFinGarantia = '11111111';
          }else{
          $form_t9->feFinGarantia = $request->feFinGarantia;  
        }

        if($form_t9->espeSistema = $request->espeSistema == '')
         {
          $form_t9->espeSistema = '1';

         }else{
          $form_t9->espeSistema = $request->espeSistema;
        }

        if($form_t9->codRegSeguro = $request->codRegSeguro == '')
         {
          $form_t9->codRegSeguro = '1';

         }else{
          $form_t9->codRegSeguro = $request->codRegSeguro;
        }

        if($form_t9->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Equipo de Transporte';
          $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
     }

}
