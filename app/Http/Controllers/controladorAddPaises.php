<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloAddPaises;
use App\modeloBitacora;

class controladorAddPaises extends Controller
{
    public function index(){

      $lastCod = modeloAddPaises::select('codPais')->get()->last();
      $infoSelect = modeloAddPaises::all();

    	$array= array(
            array("codPais","Código del País:","Introduzca el código del país ","100"),
           
    		array("pais","Nombre del País:","Introduzca el nombre del pais","100"),
    		);

    	return view('añadir.añadirPaises', compact('array','lastCod','infoSelect'));
    }

     public function store(Request $request)
    {

      $duplicado = modeloAddPaises::where('codPais', $request->codPais)->get();
      $duplicado2 = modeloAddPaises::where('pais', $request->pais)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_add = new modeloAddPaises();
        $form_add->codPais = $request->codPais;
        $form_add->pais = $request->pais;
        $form_add->revisadoAddPais = 1;

    if($form_add->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 1;
        $bit->referencia = 'Añadió Países';
        $bit->save();

    }
        
      return back()->with('msj', 'Datos Registrados Exitosamente');
      
    }else{
      return back()->with('errormsj', 'El código "'.$request->pais.'" ya existe, por favor intente otro país.');
   
      } 

    }else{
      return back()->with('errormsj', 'El Código del País "#'.$request->codPais.'" ya existe, por favor siga el orden establecido e introduzca un código nuevo');
      }  

    }

    public function edit($id)
    {
        $form_add = modeloAddPaises::find($id);

        return view('layouts.ModificarAñadir.modificarPaises', compact('form_add'));
    }
    
    public function update(Request $request, $id)
    {
        $form_add = modeloAddPaises::find($id);
 
        $form_add->pais = $request->pais;

        if($form_add->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 2;
        $bit->referencia = 'Modificó Países';
        $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
