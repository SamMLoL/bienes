<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloAdjudicacion;
use App\modeloBitacora;

class con_adjudicacionVer extends Controller
{
    public function index(){
        
        $verT28= modeloAdjudicacion::where('anulart28', '0')->get();

        return view('registros.regAdjudicacion', compact('verT28'));

    }

    public function selectId($id){

        $seleccion = modeloAdjudicacion::find($id);
        $seleccion->revisadot28 = 0;
        $seleccion->save();

       return view('muestraReg.muestraAdjudicacion',compact('seleccion'));
    }

     /*FUNCIÓN anularT28 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularAdjud($id)
    {
        $seleccion= modeloAdjudicacion::find($id);
        $seleccion->anulart28 = 1;
        
       if($seleccion->save()){
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
