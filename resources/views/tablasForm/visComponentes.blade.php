@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> COMPONENTES / DATOS DE LOS TIPOS DE LOS COMPONENTES DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
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

      <div class="row">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"> <b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar7"> Código </b>
              <b id="espaciar">
              @if($lastCod)
                {{$lastCod->codigo}}
              @else
                VPRBV-P000
              @endif
              </b>
            </div>
        </div>
<hr>

      <div class="row"> 
          <div class="col-md-12 li moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
   

   	<form role="form" id="formValidaT7" name="formValidaT7" method="POST" action="{{url('componentes')}}">
    	{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
    
    <!--ARRAY DE INPUT-TEXT arrayt7 PERTENECIENTE AL CONTROLADORT7, TABLA RELACIONADA EN LA BD => T7-->
    <!--ARRAY OF INPUT-TEXT arrayt7 BELONGING TO CONTROLADORT7, TABLE RELATED IN THE BD => T7-->

      @foreach($arrayt7 as $posicion => $valor)
       
       <div class="col-md-4 form-group separar">
          <label for="">{{$arrayt7[$posicion][1]}}</label>
          <input type="text" class="form-control" id="{{$arrayt7[$posicion][0]}}" name="{{$arrayt7[$posicion][0]}}" placeholder="{{$arrayt7[$posicion][2]}}" maxlength="{{$arrayt7[$posicion][3]}}">
       </div> 
        
      @endforeach
      
    </div>
</div>
	      <div class="row">
            <div class="col-md-12 form-group"><br>
                <center>
                    <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                             
                    <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <b>Salir</b></a>  
                </center> 
            </div>
        </div>
     </form> 
   </div>  
</div>
@endsection