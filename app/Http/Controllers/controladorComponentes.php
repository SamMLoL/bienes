<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloComponentes;
use App\modeloBitacora;

class controladorComponentes extends Controller
{
    public function index()
    {
    	$arrayt7= array(

    		array('codigo','Código','Introduzca el código interno asignado por el ente','10'),
    		array('denComponente','Denominación del Componente','Introduzca la denominación del componente','100'),
    		array('codBienMueble','Código del Bien mueble','Introduzca el código según el catalogo','10'),

    		);

    	return view('tablasForm.visComponentes', compact('arrayt7'));
    }


	public function store(Request $request)
	{
		$duplicado = modeloComponentes::where('codigo', $request->codigo)->get();

		if($duplicado == '[]'){


		$form_t7 = new modeloComponentes();
		$form_t7->codigo = $request->codigo;
		$form_t7->denComponente = $request->denComponente;
		$form_t7->codBienMueble = $request->codBienMueble;
		$form_t7->revisadot7 = 1;
        $form_t7->anulart7 = 0;

        if($form_t7->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Componentes';
          $bit->save();
          }

        return back()->with('msj', 'Datos Registrados Exitosamente');
            }else{
        return back()->with('errormsj', 'El Código "#'.$request->codigo.'" ya existe, por favor siga el orden establecido e intente un código nuevo');
        
        } 
		
	}
}