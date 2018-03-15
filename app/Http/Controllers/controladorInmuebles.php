<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloInmuebles;
use App\sel_responsables1;
use App\sel_seguros3;
use App\sel_proveedores;
use App\sel_paises;
use App\sel_parroquias;
use App\sel_ciudad;
use App\sel_estatusbien;
use App\sel_condicionbien;
use App\sel_seguros2;
use App\sel_medidapeso;
use App\sel_usos;
use App\modeloBitacora;

class controladorInmuebles extends Controller
{
    public function index()
    {	
    	$lastCod = modeloInmuebles::select('codBien')->get()->last();
    	$dependencia = sel_responsables1::all();
    	$corresBien = sel_seguros3::all();
    	$localizacion = sel_proveedores::all();
    	$selectPais = sel_paises::all();
    	$selectParroquia = sel_parroquias::all();
    	$selectCiudad = sel_ciudad::all();
      $estatusBien = sel_estatusbien::all();
    	$estadoBien = sel_condicionbien::all();
    	$moneda = sel_seguros2::all();
    	$usoInmueble = sel_usos::all();
    	$unidadConstru = sel_medidapeso::all();
    	$unidadTerreno = sel_medidapeso::all();
    	$seguroBien = sel_seguros3::all();


    	return view('AnexosT.visInmuebles', compact('lastCod','dependencia','corresBien','localizacion','selectPais','selectParroquia','selectCiudad','estatusBien','estadoBien','moneda','usoInmueble','unidadConstru','unidadTerreno','seguroBien'));
    }

    public function store(Request $request)
    {
        $form_t12 = new modeloInmuebles();
        $form_t12->depAdmRes = $request->depAdmRes;
        $form_t12->corresBien = $request->corresBien;
        $form_t12->localizacion = $request->localizacion;
        $form_t12->codPais = $request->codPais;
        $form_t12->estatuBien = $request->estatuBien;
        $form_t12->moneda = $request->moneda;
        $form_t12->edoBien = $request->edoBien;
        $form_t12->usoBienInmu = $request->usoBienInmu;
        $form_t12->unidadConstru = $request->unidadConstru;
        $form_t12->unidadTerreno = $request->unidadTerreno;
        $form_t12->seguroBien = $request->seguroBien;
        $form_t12->revisadot12 = 1;


        if($form_t12->codBien = $request->codBien == '')
        {
          $form_t12->codBien = '1';
        }else{
          $form_t12->codBien = $request->codBien;  
        }

        if($form_t12->codCata = $request->codCata == '')
        {
          $form_t12->codCata = '1';
        }else{
          $form_t12->codCata = $request->codCata;  
        }

        if($form_t12->codRespAdm = $request->codRespAdm == '')
        {
          $form_t12->codRespAdm = '1';
        }else{
          $form_t12->codRespAdm = $request->codRespAdm;  
        }

        if($form_t12->codSede = $request->codSede == '')
        {
          $form_t12->codSede = '1';
        }else{
          $form_t12->codSede = $request->codSede;  
        }

        if($form_t12->espeOtroPais = $request->espeOtroPais == '')
        {
          $form_t12->espeOtroPais = '1';
        }else{
          $form_t12->espeOtroPais = $request->espeOtroPais;  
        }

        if($form_t12->codParroquia = $request->codParroquia == '99')
        {
          $form_t12->codParroquia = '1';
        }else{
          $form_t12->codParroquia = $request->codParroquia;  
        }

        if($form_t12->codCiudad = $request->codCiudad == '99')
        {
          $form_t12->codCiudad = '1';
        }else{
          $form_t12->codCiudad = $request->codCiudad;  
        }

        if($form_t12->espeOtroCiudad = $request->espeOtroCiudad == '')
        {
          $form_t12->espeOtroCiudad = '1';
        }else{
          $form_t12->espeOtroCiudad = $request->espeOtroCiudad;  
        }

        if($form_t12->urbanizacion = $request->urbanizacion == '')
        {
          $form_t12->urbanizacion = '1';
        }else{
          $form_t12->urbanizacion = $request->urbanizacion;  
        }

        if($form_t12->calleAvenida = $request->calleAvenida == '')
        {
          $form_t12->calleAvenida = '1';
        }else{
          $form_t12->calleAvenida = $request->calleAvenida;  
        }

        if($form_t12->casaEdificio = $request->casaEdificio == '')
        {
          $form_t12->casaEdificio = '1';
        }else{
          $form_t12->casaEdificio = $request->casaEdificio;  
        }

        if($form_t12->casaEdificio = $request->casaEdificio == '')
        {
          $form_t12->casaEdificio = '1';
        }else{
          $form_t12->casaEdificio = $request->casaEdificio;  
        }

        if($form_t12->codInterno = $request->codInterno == '')
        {
          $form_t12->codInterno = '1';
        }else{
          $form_t12->codInterno = $request->codInterno;  
        }

        if($form_t12->espOtroUso = $request->espOtroUso == '')
        {
          $form_t12->espOtroUso = '1';
        }else{
          $form_t12->espOtroUso = $request->espOtroUso;  
        }

        if($form_t12->valorAdq = $request->valorAdq == '')
        {
          $form_t12->valorAdq = '0';
        }else{
          $form_t12->valorAdq = $request->valorAdq;  
        }

        if($form_t12->espeMoneda = $request->espeMoneda == '')
        {
          $form_t12->espeMoneda = '1';
        }else{
          $form_t12->espeMoneda = $request->espeMoneda;  
        }

        if($form_t12->feAdqBien = $request->feAdqBien == '')
         {
          $form_t12->feAdqBien = '11111111';

         }else{
          $form_t12->feAdqBien = $request->feAdqBien;
        }

        if($form_t12->feIngBien = $request->feIngBien == '')
         {
          $form_t12->feIngBien = '11111111';

         }else{
          $form_t12->feIngBien = $request->feIngBien;
        }

        if($form_t12->espOtroEdo = $request->espOtroEdo == '')
         {
          $form_t12->espOtroEdo = '1';

         }else{
          $form_t12->espOtroEdo = $request->espOtroEdo;
        }

        if($form_t12->descEdoBien = $request->descEdoBien == '')
         {
          $form_t12->descEdoBien = '1';

         }else{
          $form_t12->descEdoBien = $request->descEdoBien;
        }

        if($form_t12->otroUsoInmu = $request->otroUsoInmu == '')
         {
          $form_t12->otroUsoInmu = '1';

         }else{
          $form_t12->otroUsoInmu = $request->otroUsoInmu;
        }

        if($form_t12->ofiRegistro = $request->ofiRegistro == '')
         {
          $form_t12->ofiRegistro = '1';

         }else{
          $form_t12->ofiRegistro = $request->ofiRegistro;
        }

        if($form_t12->refRegistro = $request->refRegistro == '')
         {
          $form_t12->refRegistro = '1';

         }else{
          $form_t12->refRegistro = $request->refRegistro;
        }
        
         if($form_t12->tomo = $request->tomo == '')
         {
          $form_t12->tomo = '0';

         }else{
          $form_t12->tomo = $request->tomo;
        }

         if($form_t12->folio = $request->folio == '')
         {
          $form_t12->folio = '0';

         }else{
          $form_t12->folio = $request->folio;
        }

        if($form_t12->protocolo = $request->protocolo == '')
         {
          $form_t12->protocolo = '1';

         }else{
          $form_t12->protocolo = $request->protocolo;
        }

         if($form_t12->numRegistro = $request->numRegistro == '')
         {
          $form_t12->numRegistro = '0';

         }else{
          $form_t12->numRegistro = $request->numRegistro;
        }

        if($form_t12->feRegistro = $request->feRegistro == '')
         {
          $form_t12->feRegistro = '11111111';

         }else{
          $form_t12->feRegistro = $request->feRegistro;
        }

        if($form_t12->propieAnt = $request->propieAnt == '')
         {
          $form_t12->propieAnt = '1';

         }else{
          $form_t12->propieAnt = $request->propieAnt;
        }

        if($form_t12->depenIntegra = $request->depenIntegra == '')
         {
          $form_t12->depenIntegra = '1';

         }else{
          $form_t12->depenIntegra = $request->depenIntegra;
        }

        if($form_t12->areaConstru = $request->areaConstru == '')
         {
          $form_t12->areaConstru = '0';

         }else{
          $form_t12->areaConstru = $request->areaConstru;
        }

        if($form_t12->espeOtraUnidad = $request->espeOtraUnidad == '')
         {
          $form_t12->espeOtraUnidad = '1';

         }else{
          $form_t12->espeOtraUnidad = $request->espeOtraUnidad;
        }

        if($form_t12->areaTerreno = $request->areaTerreno == '')
         {
          $form_t12->areaTerreno = '0';

         }else{
          $form_t12->areaTerreno = $request->areaTerreno;
        }

        if($form_t12->espeOtraTerre = $request->espeOtraTerre == '')
         {
          $form_t12->espeOtraTerre = '1';

         }else{
          $form_t12->espeOtraTerre = $request->espeOtraTerre;
        }
        
        if($form_t12->otrasEspecifi = $request->otrasEspecifi == '')
         {
          $form_t12->otrasEspecifi = '1';

         }else{
          $form_t12->otrasEspecifi = $request->otrasEspecifi;
        }

        if($form_t12->codRegSeguro = $request->codRegSeguro == '')
         {
          $form_t12->codRegSeguro = '1';

         }else{
          $form_t12->codRegSeguro = $request->codRegSeguro;
        }

         if($form_t12->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Datos de los Bienes Inmuebles del Ente';
          $bit->save();

         

        return back()->with('msj', 'Datos Registrados Exitosamente');
        }else {
        return back()->with('errormsj', 'Los datos no se guardaron');
        }
        

    }

    public function edit($id)
    {
        $form_t12 = modeloInmuebles::find($id);
        $lastCod = modeloInmuebles::select('codBien')->get()->last();
        $dependencia = sel_responsables1::all();
        $corresBien = sel_seguros3::all();
        $localizacion = sel_proveedores::all();
        $selectPais = sel_paises::all();
        $selectParroquia = sel_parroquias::all();
        $selectCiudad = sel_ciudad::all();
        $estatusBien = sel_estatusbien::all();
        $estadoBien = sel_condicionbien::all();
        $moneda = sel_seguros2::all();
        $usoInmueble = sel_usos::all();
        $unidadConstru = sel_medidapeso::all();
        $unidadTerreno = sel_medidapeso::all();
        $seguroBien = sel_seguros3::all();

       return view('layouts.ModificarAnexosT.modificarInmuebles',compact('form_t12','lastCod','dependencia','corresBien','localizacion','selectPais','selectParroquia','selectCiudad','estatusBien','estadoBien','moneda','usoInmueble','unidadConstru','unidadTerreno','seguroBien'));
    }
}
