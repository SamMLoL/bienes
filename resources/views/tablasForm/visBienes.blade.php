@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> BIENES / DATOS DE LOS BIENES MUEBLES DEL ÓRGANO O ENTE</b></h5></div>
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
          <div class="col-md-12 li separar moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
   
   	<form role="form" id="formValidaT8" name="formValidaT8" method="POST" action="{{url('bienes')}}">
    	{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
    
    <!--ARRAY DE INPUT-TEXT arrayt8 PERTENECIENTE AL CONTROLADORT8, TABLA RELACIONADA EN LA BD => T8-->
    <!--ARRAY OF INPUT-TEXT arrayt8 BELONGING TO CONTROLADORT8, TABLE RELATED IN THE BD => T8-->

      @foreach($arrayt8 as $posicion => $valor)
       
       <div class="col-md-4 form-group separar">
          <label>{{$arrayt8[$posicion][1]}}</label>
          <input type="text" class="form-control" id="{{$arrayt8[$posicion][0]}}" name="{{$arrayt8[$posicion][0]}}" placeholder="{{$arrayt8[$posicion][2]}}" maxlength="{{$arrayt8[$posicion][3]}}">
       </div> 
        
      @endforeach

      @foreach($select as $posicion => $valor)

      <div class="col-md-4 {{$select[$posicion][2]}} form-group  separar">
        <label for="{{$select[$posicion][0]}}">{{$select[$posicion][1]}}</label>
            <select name="{{$select[$posicion][0]}}" id="{{$select[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->codResp}}</option> 
              @endforeach
            </select>
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