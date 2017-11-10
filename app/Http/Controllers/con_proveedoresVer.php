<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloProveedores;
use App\modeloBitacora;

class con_proveedoresVer extends Controller
{
    public function index()
    {
        $verT1 = modeloProveedores::where('anulart1', '0')->get();
        return view('registros.regProveedores',compact('verT1'));
    }

  
     /*FUNCIÓN selectId es para REGISTROS SIN REVISAR CUANDO CAMBIA A 0 YA EL REGISTRO SE ABRIO*/

    public function selectId($id) {

       $seleccion = modeloProveedores::find($id);
       $seleccion->revisadot1 = 0;
       $seleccion->save();


       return view('muestraReg.muestraProveedores',compact('seleccion'));



    }
     /*FUNCIÓN anularT1 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

     public function anularProvee($id)
    {
        $seleccion= modeloProveedores::find($id);
        $seleccion->anulart1 = 1;


        if($seleccion->save()){
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Proveedores';
          $bit->save();

            return redirect('regProveedores')->with('msj', 'Registro Eliminado Exitosamente');
        } else {
            return redirect()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
