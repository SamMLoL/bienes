<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloProveedores;
use App\modeloDirecta;
use App\modeloBitacora;

class con_proveedoresVer extends Controller
{
    public function index()
    {
        $verT1 = modeloProveedores::all();
        return view('registros.regProveedores',compact('verT1'));
    }

  
     /*FUNCIÓN selectId es para REGISTROS SIN REVISAR CUANDO CAMBIA A 0 YA EL REGISTRO SE ABRIO*/

    public function selectId($id) {

       $seleccion = modeloProveedores::find($id);
       $seleccion->revisadot1 = 0;
       $seleccion->save();


       return view('muestraReg.muestraProveedores',compact('seleccion'));

    }
    

     public function anularProvee($id)
    {   

        $seleccion= modeloProveedores::find($id);

        $seleccion2 = modeloDirecta::where('codProvee', $id)->get();

        if($seleccion2 != '[]'){

        foreach($seleccion2 as $directa)
        {
          $directa->delete();
        }
      }

          if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Proveedores y Compra Directa Asociados';
          $bit->save();

          return redirect('regProveedores')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }

    }

}
