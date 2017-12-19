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

class controladorBienes extends Controller
{
    public function index()
    {

    	$infoSelect = modeloDirecta::all();
     $dependecia = sel_responsables1::all();
     $estatusBien = sel_estatusbien::all();
     $moneda = sel_seguros2::all();
     $condicion = sel_condicionbien::all();
     $marcas = modeloMarcas::all();
     $modelos = modeloModelos::all();

     $unidadGarantia = sel_garantiabien::all();
     $poseeComponente = sel_seguros3::all();
          
     return view('tablasForm.visBienes', compact('infoSelect','dependecia','estatusBien','moneda','condicion','marcas','modelos','unidadGarantia','poseeComponente'));

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
    
    }

}
