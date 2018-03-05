<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloAddCiudad;
use App\modeloBitacora;

class controladorAddCiudad extends Controller
{
     public function index(){

      $lastCod = modeloAddCiudad::select('codCiudad')->get()->last();
      $infoSelect = modeloAddCiudad::all();

    	$array= array(
            array("codCiudad","Código de la Ciudad","Introduzca el código de la ciudad ","100"),
           
    		array("ciudad","Nombre de la Ciudad:","Introduzca el nombre de la ciudad","100"),
    		);

    	return view('añadir.añadirCiudad', compact('array','lastCod','infoSelect'));
    }

     public function store(Request $request)
    {

      $duplicado = modeloAddCiudad::where('codCiudad', $request->codCiudad)->get();
      $duplicado2 = modeloAddCiudad::where('ciudad', $request->ciudad)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_add = new modeloAddCiudad();
        $form_add->codCiudad = $request->codCiudad;
        $form_add->ciudad = $request->ciudad;
        $form_add->revisadoAddCiudad = 1;

    if($form_add->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 1;
        $bit->referencia = 'Ciudad';
        $bit->save();

    }
        
      return back()->with('msj', 'Datos Registrados Exitosamente');
      
    }else{
      return back()->with('errormsj', 'El código "'.$request->ciudad.'" ya existe, por favor intente otra ciudad.');
   
      } 

    }else{
      return back()->with('errormsj', 'El Código de la Ciudad "#'.$request->codCiudad.'" ya existe, por favor siga el orden establecido e introduzca un código nuevo');
      }  

    }

    public function edit($id)
    {
        $form_add = modeloAddCiudad::find($id);

        return view('layouts.ModificarAñadir.modificarCiudad', compact('form_add'));
    }
    
    public function update(Request $request, $id)
    {
        $form_add = modeloAddCiudad::find($id);
 
        $form_add->ciudad = $request->ciudad;

        if($form_add->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 2;
        $bit->referencia = 'Ciudad';
        $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
