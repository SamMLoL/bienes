@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="panel-heading text-center separar"><h5><b>ANEXO T-6 / DATOS DE LOS MODELOS DE LOS BIENES MUEBLES DEL ORGANO O ENTE</b></h5></div>
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

  <div class="row"> 
      <div class="col-md-12 li separar moverIzq">
          <ul class="js-errors li"></ul>
      </div>
  </div>

<div class="row">
   <div class="col-md-12">
      <form role="form" id="formValidaT6" name="formValidaT6" method="POST" action="{{url('t6')}}">
      {{ csrf_field() }}
        
      <!--ARRAY DE INPUT-TEXT PERTENECIENTE AL CONTROLADORT6, TABLA RELACIONADA EN LA BD => T6-->
      <!--ARRAY OF INPUT-TEXT BELONGING TO CONTROLADORT6, TABLE RELATED IN THE BD => T6-->
  
          @foreach($arrayT6 as $posicion => $valor)

              <div class="col-md-4 form-group separar">
          
                  <label for="{{$arrayT6[$posicion][0]}}">{{$arrayT6[$posicion][1]}}</label>
                     
                  <input type="text" class="form-control" name="{{$arrayT6[$posicion][0]}}" id="{{$arrayT6[$posicion][0]}}" placeholder="{{$arrayT6[$posicion][2]}}" maxlength="{{$arrayT6[$posicion][3]}}" >

              </div>
            
          @endforeach
    
        <div class="row">
            <div class="col-md-12 form-group" ><br>
                <center>
                    <button type="submit" class="btn btn-lg btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</button>
                             
                    <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                </center> 
            </div>
        </div>
     </form> 
   </div>  
</div>

@endsection
