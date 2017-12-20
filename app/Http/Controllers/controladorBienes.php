<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloBienes;
use App\modeloDirecta;
use App\sel_responsables1;
use App\sel_estatusbien;
use App\sel_seguros2;
use App\sel_condicionbien;
use App\modeloMarcas;
use App\modeloModelos;
use App\sel_garantiabien;
use App\sel_seguros3;
use App\sel_colorbien;
use App\modeloBitacora;

class controladorBienes extends Controller
{
    public function index()
    {

     $lastCod = modeloBienes::select('codOt2_1')->get()->last();
     $dependecia = sel_responsables1::all();
     $estatusBien = sel_estatusbien::all();
     $moneda = sel_seguros2::all();
     $condicion = sel_condicionbien::all();
     $marcas = modeloMarcas::all();
     $modelos = modeloModelos::all();
     $colorBien = sel_colorbien::all();

     $unidadGarantia = sel_garantiabien::all();
     $poseeComponente = sel_seguros3::all();
          
     return view('tablasForm.visBienes', compact('lastCod','dependecia','estatusBien','moneda','condicion','marcas','modelos','colorBien','unidadGarantia','poseeComponente'));

    }

    public function getBienes(Request $request, $id)
    {
    
      if($request->ajax()){
         $bienes1 = modeloBienes::selectBienes($id);
          return response()->json($bienes1);
      }
     }

    public function store(Request $request)
    {
         $form_t8 = new modeloBienes();
         $form_t8->codOt2_1 = $request->codOt2_1;
         $form_t8->codCata = $request->codCata;
         $form_t8->depAdmRes = $request->depAdmRes;
         $form_t8->sedeOrgano = $request->sedeOrgano;
         $form_t8->estatuBien = $request->estatuBien;
         $form_t8->moneda = $request->moneda;
         $form_t8->edoBien = $request->edoBien;
         $form_t8->codMarca = $request->codMarca;
         $form_t8->codModel = $request->codModel;
         $form_t8->anoFabriBien = $request->anoFabriBien;
         $form_t8->codColorBien = $request->codColorBien;
         $form_t8->unidadMedi = $request->unidadMedi;
         $form_t8->poseeCompo = $request->poseeCompo;
         $form_t8->seguroBien = $request->seguroBien;
         $form_t8->revisadot8 = 1;

         

         if($form_t8->codRespAdm = $request->codRespAdm == '')
         {
          $form_t8->codRespAdm = '1';

         }else{
          $form_t8->codRespAdm = $request->codRespAdm;
         }

         if($form_t8->codResBien = $request->codResBien == '')
         {
          $form_t8->codResBien = '1';

         }else{
          $form_t8->codResBien = $request->codResBien;
         }

         if($form_t8->codInterno = $request->codInterno == '')
         {
          $form_t8->codInterno = '1';

         }else{
          $form_t8->codInterno = $request->codInterno;
         }

         if($form_t8->espOtro = $request->espOtro == '')
         {
          $form_t8->espOtro = '1';

         }else{
          $form_t8->espOtro = $request->espOtro;
         }

         if($form_t8->valorAdq = $request->valorAdq == '')
         {
          $form_t8->valorAdq = '0';

         }else{
          $form_t8->valorAdq = $request->valorAdq;
         }

         if($form_t8->espeMoneda = $request->espeMoneda == '')
         {
          $form_t8->espeMoneda = '1';

         }else{
          $form_t8->espeMoneda = $request->espeMoneda;
         }

         if($form_t8->feAdqBien = $request->feAdqBien == ''){
          $form_t8->feAdqBien = '11111111';
          }else{
          $form_t8->feAdqBien = $request->feAdqBien;  
        }

        if($form_t8->feIngBien = $request->feIngBien == ''){
          $form_t8->feIngBien = '11111111';
          }else{
          $form_t8->feIngBien = $request->feIngBien;  
        }

        if($form_t8->espOtroEdo = $request->espOtroEdo == '')
         {
          $form_t8->espOtroEdo = '1';

         }else{
          $form_t8->espOtroEdo = $request->espOtroEdo;
        }

        if($form_t8->descEdoBien = $request->descEdoBien == '')
         {
          $form_t8->descEdoBien = '1';

         }else{
          $form_t8->descEdoBien = $request->descEdoBien;
        }

        if($form_t8->serialBien = $request->serialBien == '')
         {
          $form_t8->serialBien = '1';

         }else{
          $form_t8->serialBien = $request->serialBien;
        }


        if($form_t8->espeColor = $request->espeColor == '')
         {
          $form_t8->espeColor = '1';

         }else{
          $form_t8->espeColor = $request->espeColor;
        }

        if($form_t8->otraEspeColor = $request->otraEspeColor == '')
         {
          $form_t8->otraEspeColor = '1';

         }else{
          $form_t8->otraEspeColor = $request->otraEspeColor;
        }

        if($form_t8->espeTecBien = $request->espeTecBien == '')
         {
          $form_t8->espeTecBien = '1';

         }else{
          $form_t8->espeTecBien = $request->espeTecBien;
        }

        if($form_t8->otraDescBien = $request->otraDescBien == '')
         {
          $form_t8->otraDescBien = '1';

         }else{
          $form_t8->otraDescBien = $request->otraDescBien;
        }

        if($form_t8->garantia = $request->garantia == '')
         {
          $form_t8->garantia = '1';

         }else{
          $form_t8->garantia = $request->garantia;
        }

        if($form_t8->feIniGarantia = $request->feIniGarantia == ''){
          $form_t8->feIniGarantia = '11111111';
          }else{
          $form_t8->feIniGarantia = $request->feIniGarantia;  
        }

        if($form_t8->feFinGarantia = $request->feFinGarantia == ''){
          $form_t8->feFinGarantia = '11111111';
          }else{
          $form_t8->feFinGarantia = $request->feFinGarantia;  
        }

        if($form_t8->codRegSeguro = $request->codRegSeguro == ''){
          $form_t8->codRegSeguro = '1';
          }else{
          $form_t8->codRegSeguro = $request->codRegSeguro;  
        }

        if($form_t8->save()){

          //Función para mostrar la bitacora de las acciones de los usuarios tabla BD: bitacora , acciones.
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Bienes';
          $bit->save();


            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }


}
