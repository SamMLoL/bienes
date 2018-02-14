<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloComponentes;
use App\modeloBitacora;

class con_componentesVer extends Controller
{

    public function index()

    {
    	$verT7 = modeloComponentes::all();
    	return view('RegistrosT.regComponentes', compact('verT7'));
    }

    public function selectId($id)
    {
	    $seleccion = modeloComponentes::find($id);
	    $seleccion->revisadot7 = 0;
	    $seleccion->save();

       return view('MuestraAnexosT.muestraComponentes',compact('seleccion'));
    }
   
    public function anularComponentes($id)
    
    {
      
      $seleccion = modeloComponentes::find($id);

      if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Componentes';
          $bit->save();

          return redirect('regComponentes')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los Datos no se Eliminaron');
       }

    }
}
