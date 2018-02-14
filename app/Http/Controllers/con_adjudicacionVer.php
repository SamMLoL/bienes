<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloAdjudicacion;
use App\modeloBitacora;

class con_adjudicacionVer extends Controller
{
    public function index(){
        
        $verT28= modeloAdjudicacion::all();

        return view('RegistrosT.regAdjudicacion', compact('verT28'));

    }

    public function selectId($id){

        $seleccion = modeloAdjudicacion::find($id);
        $seleccion->revisadot28 = 0;
        $seleccion->save();

       return view('MuestraAnexosT..muestraAdjudicacion',compact('seleccion'));
    }

    public function anularAdjud($id)
    {
        $seleccion= modeloAdjudicacion::find($id);
        
       if($seleccion->delete()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Adjudicación';
        $bit->save();

         return redirect('regAdjudicacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
