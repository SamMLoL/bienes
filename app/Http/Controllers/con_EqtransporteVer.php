<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloEqtransporte;
use App\modeloBitacora;

class con_EqtransporteVer extends Controller
{
    public function index(){
        
        $verT9= modeloEqtransporte::all();

        return view('registros.regEqtransporte', compact('verT9'));

    }

    public function selectId($id){

        $seleccion = modeloEqtransporte::find($id);
        $seleccion->revisadot9 = 0;
        $seleccion->save();

       return view('muestraReg.muestraEqtransporte',compact('seleccion'));
    }

    public function anularTransporte($id)
    {
        $seleccion= modeloEqtransporte::find($id);
        
       if($seleccion->delete()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Equipo de Transporte';
        $bit->save();

         return redirect('regTransporte')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
