<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloSemovientes;
use App\sel_responsables1;
use App\sel_estatusbien;
use App\sel_seguros2;
use App\sel_condicionbien;
use App\sel_genero;
use App\sel_colorbien;
use App\sel_seguros3;
use App\sel_tipoanimal;
use App\sel_proposito;
use App\sel_medidapeso;
use App\modeloBitacora;

class controladorSemovientes extends Controller
{
    public function index()
    {
    	$lastCod = modeloSemovientes::select('codBien')->get()->last();
    	$dependecia = sel_responsables1::all();
    	$estatusBien = sel_estatusbien::all();
    	$moneda = sel_seguros2::all();
    	$condicion = sel_condicionbien::all();
      $genero = sel_genero::all();
      $colorBien = sel_colorbien::orderBy('opcion')->get();
      $seguroBien = sel_seguros3::all();
      $tiposAnimal = sel_tipoanimal::orderBy('opcion')->get();
      $proposito = sel_proposito::orderBy('opcion')->get();
      $peso = sel_medidapeso::orderBy('opcion')->get();


        return view('AnexosT.visSemovientes', compact('lastCod','dependecia','estatusBien','moneda','condicion','genero','colorBien','seguroBien','tiposAnimal','proposito','peso'));
    }

     public function store(Request $request)
    {
         $form_t10 = new modeloSemovientes();
         $form_t10->codBien = $request->codBien;
         $form_t10->depAdmRes = $request->depAdmRes;
         $form_t10->estatuBien = $request->estatuBien;
         $form_t10->moneda = $request->moneda;
         $form_t10->edoBien = $request->edoBien;
         $form_t10->genero = $request->genero;
         $form_t10->tipoAnimal = $request->tipoAnimal;
         $form_t10->proposito = $request->proposito;
         $form_t10->codColorBien = $request->codColorBien;
         $form_t10->peso = $request->peso;
         $form_t10->seguroBien = $request->seguroBien;
         $form_t10->revisadot10 = 1;


         if($form_t10->codCata = $request->codCata == '')
         {
          $form_t10->codCata = '1';

         }else{
          $form_t10->codCata = $request->codCata;
         }
         
         if($form_t10->sedeOrgano = $request->sedeOrgano == '')
         {
          $form_t10->sedeOrgano = '1';

         }else{
          $form_t10->sedeOrgano = $request->sedeOrgano;
         }

         if($form_t10->codRespAdm = $request->codRespAdm == '')
         {
          $form_t10->codRespAdm = '1';

         }else{
          $form_t10->codRespAdm = $request->codRespAdm;
         }

         if($form_t10->codResBien = $request->codResBien == '')
         {
          $form_t10->codResBien = '1';

         }else{
          $form_t10->codResBien = $request->codResBien;
         }

         if($form_t10->codInterno = $request->codInterno == '')
         {
          $form_t10->codInterno = '1';

         }else{
          $form_t10->codInterno = $request->codInterno;
         }

         if($form_t10->espOtroUso = $request->espOtroUso == '')
         {
          $form_t10->espOtroUso = '1';

         }else{
          $form_t10->espOtroUso = $request->espOtroUso;
         }

         if($form_t10->valorAdq = $request->valorAdq == '')
         {
          $form_t10->valorAdq = '0';

         }else{
          $form_t10->valorAdq = $request->valorAdq;
         }

         if($form_t10->espeMoneda = $request->espeMoneda == '')
         {
          $form_t10->espeMoneda = '1';

         }else{
          $form_t10->espeMoneda = $request->espeMoneda;
         }

         if($form_t10->feAdqBien = $request->feAdqBien == ''){
          $form_t10->feAdqBien = '11111111';
          }else{
          $form_t10->feAdqBien = $request->feAdqBien;  
        }

        if($form_t10->feIngBien = $request->feIngBien == ''){
          $form_t10->feIngBien = '11111111';
          }else{
          $form_t10->feIngBien = $request->feIngBien;  
        }

        if($form_t10->espOtroEdo = $request->espOtroEdo == '')
         {
          $form_t10->espOtroEdo = '1';

         }else{
          $form_t10->espOtroEdo = $request->espOtroEdo;
        }

        if($form_t10->descEdoBien = $request->descEdoBien == '')
         {
          $form_t10->descEdoBien = '1';

         }else{
          $form_t10->descEdoBien = $request->descEdoBien;
        }

        if($form_t10->raza = $request->raza == '')
         {
          $form_t10->raza = '1';

         }else{
          $form_t10->raza = $request->raza;
        }

        if($form_t10->espeOtroTipo = $request->espeOtroTipo == '')
         {
          $form_t10->espeOtroTipo = '1';

         }else{
          $form_t10->espeOtroTipo = $request->espeOtroTipo;
        }

        if($form_t10->espeOtroPro = $request->espeOtroPro == '')
         {
          $form_t10->espeOtroPro = '1';

         }else{
          $form_t10->espeOtroPro = $request->espeOtroPro;
        }

        if($form_t10->espeColor = $request->espeColor == '')
         {
          $form_t10->espeColor = '1';

         }else{
          $form_t10->espeColor = $request->espeColor;
        }

        if($form_t10->otraEspeColor = $request->otraEspeColor == '')
         {
          $form_t10->otraEspeColor = '1';

         }else{
          $form_t10->otraEspeColor = $request->otraEspeColor;
        }

        if($form_t10->unidadPeso = $request->unidadPeso == '')
         {
          $form_t10->unidadPeso = '1';

         }else{
          $form_t10->unidadPeso = $request->unidadPeso;
        }

        if($form_t10->feNacimiento = $request->feNacimiento == '')
         {
          $form_t10->feNacimiento = '11111111';

         }else{
          $form_t10->feNacimiento = $request->feNacimiento;
        }

        if($form_t10->seParticulares = $request->seParticulares == '')
         {
          $form_t10->seParticulares = '1';

         }else{
          $form_t10->seParticulares = $request->seParticulares;
        }

        if($form_t10->otrasEspecifi = $request->otrasEspecifi == '')
         {
          $form_t10->otrasEspecifi = '1';

         }else{
          $form_t10->otrasEspecifi = $request->otrasEspecifi;
        }

        if($form_t10->numHierro = $request->numHierro == '')
         {
          $form_t10->numHierro = '1';

         }else{
          $form_t10->numHierro = $request->numHierro;
        }

        if($form_t10->codRegSeguro = $request->codRegSeguro == '')
         {
          $form_t10->codRegSeguro = '1';

         }else{
          $form_t10->codRegSeguro = $request->codRegSeguro;
        }

        if($form_t10->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Semovientes';
          $bit->save();

        }

        return back()->with('msj', 'Datos Registrados Exitosamente');

    }

     public function edit($id)
    {     
          $form_t10 = modeloSemovientes::find($id);
          $lastCod = modeloSemovientes::select('codBien')->get()->last();
          $dependecia = sel_responsables1::all();
          $estatusBien = sel_estatusbien::all();
          $moneda = sel_seguros2::all();
          $condicion = sel_condicionbien::all();
          $genero = sel_genero::all();
          $colorBien = sel_colorbien::orderBy('opcion')->get();
          $seguroBien = sel_seguros3::all();
          $tiposAnimal = sel_tipoanimal::orderBy('opcion')->get();
          $proposito = sel_proposito::orderBy('opcion')->get();
          $peso = sel_medidapeso::orderBy('opcion')->get();

        return view('layouts.ModificarAnexosT.modificarSemovientes', compact('form_t10','lastCod','dependecia','estatusBien','moneda','condicion','genero','colorBien','seguroBien','tiposAnimal','proposito','peso'));
    }

    public function update(Request $request, $id)
    {
         $form_t10=modeloSemovientes::find($id); 
         $form_t10->codBien = $request->codBien;
         $form_t10->depAdmRes = $request->depAdmRes;
         $form_t10->estatuBien = $request->estatuBien;
         $form_t10->moneda = $request->moneda;
         $form_t10->edoBien = $request->edoBien;
         $form_t10->genero = $request->genero;
         $form_t10->tipoAnimal = $request->tipoAnimal;
         $form_t10->proposito = $request->proposito;
         $form_t10->codColorBien = $request->codColorBien;
         $form_t10->peso = $request->peso;
         $form_t10->seguroBien = $request->seguroBien;


         if($form_t10->codCata = $request->codCata == '')
         {
          $form_t10->codCata = '1';

         }else{
          $form_t10->codCata = $request->codCata;
         }
         
         if($form_t10->sedeOrgano = $request->sedeOrgano == '')
         {
          $form_t10->sedeOrgano = '1';

         }else{
          $form_t10->sedeOrgano = $request->sedeOrgano;
         }

         if($form_t10->codRespAdm = $request->codRespAdm == '')
         {
          $form_t10->codRespAdm = '1';

         }else{
          $form_t10->codRespAdm = $request->codRespAdm;
         }

         if($form_t10->codResBien = $request->codResBien == '')
         {
          $form_t10->codResBien = '1';

         }else{
          $form_t10->codResBien = $request->codResBien;
         }

         if($form_t10->codInterno = $request->codInterno == '')
         {
          $form_t10->codInterno = '1';

         }else{
          $form_t10->codInterno = $request->codInterno;
         }

         if($form_t10->espOtroUso = $request->espOtroUso == '')
         {
          $form_t10->espOtroUso = '1';

         }else{
          $form_t10->espOtroUso = $request->espOtroUso;
         }

         if($form_t10->valorAdq = $request->valorAdq == '')
         {
          $form_t10->valorAdq = '0';

         }else{
          $form_t10->valorAdq = $request->valorAdq;
         }

         if($form_t10->espeMoneda = $request->espeMoneda == '')
         {
          $form_t10->espeMoneda = '1';

         }else{
          $form_t10->espeMoneda = $request->espeMoneda;
         }

         if($form_t10->feAdqBien = $request->feAdqBien == ''){
          $form_t10->feAdqBien = '11111111';
          }else{
          $form_t10->feAdqBien = $request->feAdqBien;  
        }

        if($form_t10->feIngBien = $request->feIngBien == ''){
          $form_t10->feIngBien = '11111111';
          }else{
          $form_t10->feIngBien = $request->feIngBien;  
        }

        if($form_t10->espOtroEdo = $request->espOtroEdo == '')
         {
          $form_t10->espOtroEdo = '1';

         }else{
          $form_t10->espOtroEdo = $request->espOtroEdo;
        }

        if($form_t10->descEdoBien = $request->descEdoBien == '')
         {
          $form_t10->descEdoBien = '1';

         }else{
          $form_t10->descEdoBien = $request->descEdoBien;
        }


        if($form_t10->raza = $request->raza == '')
         {
          $form_t10->raza = '1';

         }else{
          $form_t10->raza = $request->raza;
        }

        if($form_t10->espeOtroTipo = $request->espeOtroTipo == '')
         {
          $form_t10->espeOtroTipo = '1';

         }else{
          $form_t10->espeOtroTipo = $request->espeOtroTipo;
        }

        if($form_t10->espeOtroPro = $request->espeOtroPro == '')
         {
          $form_t10->espeOtroPro = '1';

         }else{
          $form_t10->espeOtroPro = $request->espeOtroPro;
        }

        if($form_t10->espeColor = $request->espeColor == '')
         {
          $form_t10->espeColor = '1';

         }else{
          $form_t10->espeColor = $request->espeColor;
        }

        if($form_t10->otraEspeColor = $request->otraEspeColor == '')
         {
          $form_t10->otraEspeColor = '1';

         }else{
          $form_t10->otraEspeColor = $request->otraEspeColor;
        }

        if($form_t10->unidadPeso = $request->unidadPeso == '')
         {
          $form_t10->unidadPeso = '1';

         }else{
          $form_t10->unidadPeso = $request->unidadPeso;
        }

        if($form_t10->feNacimiento = $request->feNacimiento == '')
         {
          $form_t10->feNacimiento = '11111111';

         }else{
          $form_t10->feNacimiento = $request->feNacimiento;
        }

        if($form_t10->seParticulares = $request->seParticulares == '')
         {
          $form_t10->seParticulares = '1';

         }else{
          $form_t10->seParticulares = $request->seParticulares;
        }

        if($form_t10->otrasEspecifi = $request->otrasEspecifi == '')
         {
          $form_t10->otrasEspecifi = '1';

         }else{
          $form_t10->otrasEspecifi = $request->otrasEspecifi;
        }

        if($form_t10->numHierro = $request->numHierro == '')
         {
          $form_t10->numHierro = '1';

         }else{
          $form_t10->numHierro = $request->numHierro;
        }

        if($form_t10->codRegSeguro = $request->codRegSeguro == '')
         {
          $form_t10->codRegSeguro = '1';

         }else{
          $form_t10->codRegSeguro = $request->codRegSeguro;
        }

        if($form_t10->save()){

            $bit = new modeloBitacora();
            $bit->user = $_SESSION['id'];
            $bit->accion  = 2;
            $bit->referencia = 'Bienes';
            $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
          }
    }
}
