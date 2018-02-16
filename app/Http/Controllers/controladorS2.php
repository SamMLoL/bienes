<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS2;
use App\modeloBitacora;

class controladorS2 extends Controller
{
    public function index()
    {	
    	$lastCod = modeloS2::select('cedula')->get()->last();
    	
    	$cedula = array(
    		array("cedula","Cédula:","Introduzca el número de cédula de la autoridad","8"),
    	);

    	$nombre = array(
    		array("nombre","Nombre:","Introduzca el nombre de la autoridad","100"),
    		);

    	$apellido = array(
    		array("apellido","Apellido:","Introduzca el apellido de la autoridad","100"),
    		);

    	$telefono = array(
    		array("telefono","Teléfono:","+58","10","return soloNum(event)","10"),
    		);

    	$cargo = array(
    		array("cargo","Cargo:","Introduzca el cargo de la autoridad","100"),
    		);

    	$correo = array(
    		array("correo","Correo:","Introduzca el cargo de la autoridad","100"),
    		);

    	$numeroGaceta = array(
    		array("numGaceta","Número de Gaceta:","Introduzca el número de gaceta","10"),
    		);

    	$fechaGaceta = array(
    		array("feGaceta","Fecha de Gaceta","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    		);

    	$numeroDecreto = array(
    		array("numDecre","Número de Resolución ó Decreto:","Introduzca el número de decreto","10"),
    		);

    	$fechaDecreto = array(
    		array("feDecre","Fecha de Resolución ó Decreto:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    		);

    	return view('AnexosS.visMaxima', compact('lastCod','cedula','nombre','apellido','telefono','cargo','correo','numeroGaceta','fechaGaceta','numeroDecreto','fechaDecreto'));

    }

     public function store(Request $request)
    {

    $duplicado = modeloS2::where('cedula', $request->cedula)->get();

    if($duplicado == '[]'){

        $form_s2=new modeloS2();
        $form_s2->revisadoS2 = 1;

        if($form_s2->cedula = $request->cedula == ''){
        $form_s2->cedula = '1';
        
        }else{
        $form_s2->cedula = $request->cedula;
        }

        if($form_s2->nombre = $request->nombre == ''){
        $form_s2->nombre = '1';
        
        }else{
        $form_s2->nombre = $request->nombre;
        }

        if($form_s2->apellido = $request->apellido == ''){
        $form_s2->apellido = '1';
        
        }else{
        $form_s2->apellido = $request->apellido;
        }

        if($form_s2->telefono = $request->telefono == ''){
        $form_s2->telefono = '0';
        
        }else{
        $form_s2->telefono = $request->telefono;
        }

        if($form_s2->cargo = $request->cargo == ''){
        $form_s2->cargo = '1';
        
        }else{
        $form_s2->cargo = $request->cargo;
        }

        if($form_s2->correo = $request->correo == ''){
        $form_s2->correo = '1';
        
        }else{
        $form_s2->correo = $request->correo;
        }

        if($form_s2->numGaceta = $request->numGaceta == ''){
        $form_s2->numGaceta = '0';
        
        }else{
        $form_s2->numGaceta = $request->numGaceta;
        }

        if($form_s2->feGaceta = $request->feGaceta == ''){
        $form_s2->feGaceta = '1111-11-11';
        
        }else{
        $form_s2->feGaceta = $request->feGaceta;
        }

        if($form_s2->numDecre = $request->numDecre == ''){
        $form_s2->numDecre = '0';
        
        }else{
        $form_s2->numDecre = $request->numDecre;
        }

        if($form_s2->feDecre = $request->feDecre == ''){
        $form_s2->feDecre = '1111-11-11';
        
        }else{
        $form_s2->feDecre = $request->feDecre;
        }

        if($form_s2->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Datos de la Máxima Autoridad';
          $bit->save();

          }

    return back()->with('msj', 'Datos Registrados Exitosamente');
            }else{
    return back()->with('errormsj', 'La cédula de identidad "#'.$request->cedula.'" ya existe, por favor ingrese una nueva');

        }
    }

    public function edit($id)
    {
        $form_s2 = modeloS2::find($id);
        $lastCod = modeloS2::select('cedula')->get()->last();
        
        return view('layouts.ModificarAnexosS.modificarMaxima', compact('form_s2','lastCod'));
    }

    public function update(Request $request, $id)
      {
        $form_s2 = modeloS2::find($id);
        $form_s2->cedula = $request->cedula;
        
        if ($form_s2->nombre = $request->nombre == '') {
        $form_s2->nombre = '1';
      
        }else{
          $form_s2->nombre = $request->nombre;
        }

        if ($form_s2->apellido = $request->apellido == '') {
        $form_s2->apellido = '1';
      
        }else{
          $form_s2->apellido = $request->apellido;
        }

        if ($form_s2->telefono = $request->telefono == '') {
        $form_s2->telefono = '0';
      
        }else{
          $form_s2->telefono = $request->telefono;
        }

        if ($form_s2->cargo = $request->cargo == '') {
        $form_s2->cargo = '1';
      
        }else{
          $form_s2->cargo = $request->cargo;
        }

        if ($form_s2->correo = $request->correo == '') {
        $form_s2->correo = '1';
      
        }else{
          $form_s2->correo = $request->correo;
        }

        if ($form_s2->numGaceta = $request->numGaceta == '') {
        $form_s2->numGaceta = '1';
      
        }else{
          $form_s2->numGaceta = $request->numGaceta;
        }

        if ($form_s2->feGaceta = $request->feGaceta == '') {
        $form_s2->feGaceta = '1111-11-11';
      
        }else{
          $form_s2->feGaceta = $request->feGaceta;
        }

        if ($form_s2->numDecre = $request->numDecre == '') {
        $form_s2->numDecre = '1';
      
        }else{
          $form_s2->numDecre = $request->numDecre;
        }

        if ($form_s2->feDecre = $request->feDecre == '') {
        $form_s2->feDecre = '1111-11-11';
      
        }else{
          $form_s2->feDecre = $request->feDecre;
        }


        $form_s2->save();

        if($form_s2->save()){
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Datos Básicos de los Inmuebles';
          $bit->save();
    
        
            return back()->with('msj', 'Datos modificados exitosamente');
        } else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

      }
}
