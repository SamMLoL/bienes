@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> MUEBLES / DATOS DE LOS BIENES MUEBLES DEL ÓRGANO O ENTE</b></h5></div>
      </div>

      <div class="row">
          <div class="col-md-12 separar">
            <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
               <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO. SEGÚN EL MANUAL DE ESPECIFICACIONES TÉCNICAS.</b></h6>
          </div>
      </div>


      <div class="row">
          <div class="col-md-12 desvanecer">
            @if(session()->has('msj'))
              <center><div  class="col-md-12  alert alert-success" >{{session('msj')}}</div></center>
                @endif

                @if(session()->has('errormsj'))
              <center><div  class="col-md-12  alert alert-danger" >{{session('errormsj')}}</div></center>
            @endif
          </div>
      </div>
      
      <div class="row separar">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Origen</b> 
            
              @if($lastCod)
                  <center id="rojo"> {{$lastCod->codBien}}</center>
              @else
                  <center id="rojo">D2012001</center>
              @endif
              
                </li></li>
            </div>
        </div> 

      <div class="row"> 
          <div class="col-md-12 li moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
<hr>
   
   	<form role="form" id="formValidaT11" name="formValidaT11" method="POST" action="{{url('datosbienes')}}">
    	{{ csrf_field() }}

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li><b>Código del Origen del Bien:</b></li>
                <input type="text" class="form-control" name="codBien" id="codBien" placeholder="Introduzca el código de origen del bien" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
              <li><b>Código Interno del Componente:</b></li>
                <input type="text" class="form-control" name="codCompo" id="codCompo" placeholder="Introduzca el código interno del componente" maxlength="20">
            </div>

            <div class="col-md-4 form-group">
              <li><b>Serial del Componente:</b></li>
                <input type="text" class="form-control" name="serialCompo" id="serialCompo" placeholder="Introduzca el serial del componente" maxlength="20">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li>Código del Tipo de Componente:</li>
                  <input type="text" id="codTipoCompo" name="codTipoCompo" class="form-control" placeholder="Introduzca el año de fabricación" maxlength="4" onkeypress="return soloNum(event)">
            </div>

             <div class="col-md-4 form-group">
                <li><b>Código de la Marca del Bien:</b></li>
                  <select name="codMarca" id="codMarca" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($marcas as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->codMarca}}</option> 
                      @endforeach
                  </select>
            </div>

            <div class="col-md-4 form-group">
              <li><b>Código Modelo del Bien:</b></li>
                <select name="codModel" id="codModel" class="form-control" disabled>
                    <option value="0" >Seleccione</option>
                      @foreach($modelos as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->codModel}}</option> 
                      @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Descripción del Componente:</li>
                 <textarea name="descCompo" id="descCompo" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conDatos">0/255</div> </div>
            </div>
        </div>
    </div>

    <div class="row">
          <div class="col-md-12 form-group" ><br>
                <center>
                    <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                             
                    <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><b> Salir</b></a>  
                </center> 
          </div>
    </div>

@endsection