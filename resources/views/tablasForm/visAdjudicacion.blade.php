@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> ADJUDICACIÓN / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
      </div>

    	<div class="row separar">
      		<div class="col-md-12">
      			 <h7><b>I) Aplicable solo para la forma de adquisición de Adjudicación.</b></h7>
      		</div>
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

      <div class="row"> 
          <div class="col-md-12 li separar moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
   

   	<form role="form" id="formValidaT28" name="formValidaT28" method="POST" action="{{url('adjudicacion')}}">
    	{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
    <!--ARRAY SELECT selectT28 PERTENECIENTE AL CONTROLADORT28, TABLA RELACIONADA EN LA BD => mig_selectT28 Y T28-->
    <!--ARRAY SELECT selectT28 BELONGING TO CONTROLADORT28, TABLE RELATED IN THE BD => mig_selectT28 AND T28-->
      
      @foreach($selectT28 as $posicion => $valor)
      <div class="col-md-4 {{$selectT28[$posicion][2]}} form-group separar">
          <label for="{{$selectT28[$posicion][0]}}">{{$selectT28[$posicion][1]}}</label>
            <select name="{{$selectT28[$posicion][0]}}" id="{{$selectT28[$posicion][0]}}" class="form-control">
               <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
          </select>
      </div>
      @endforeach
    
    <!--ARRAY DE INPUT-TEXT arrayT28 PERTENECIENTE AL CONTROLADORT28, TABLA RELACIONADA EN LA BD => T28-->
    <!--ARRAY OF INPUT-TEXT arrayT28 BELONGING TO CONTROLADORT28, TABLE RELATED IN THE BD => T28-->

      @foreach($arrayT28 as $posicion => $valor)
       
       <div class="col-md-4 {{$arrayT28[$posicion][4]}} form-group separar">
          <label for="">{{$arrayT28[$posicion][1]}}</label>
          <input type="text" class="form-control" id="{{$arrayT28[$posicion][0]}}" name="{{$arrayT28[$posicion][0]}}" placeholder="{{$arrayT28[$posicion][2]}}" maxlength="{{$arrayT28[$posicion][3]}}">
       </div> 
        
      @endforeach
    
    <!--ARRAY DE FECHA dateT28 PERTENECIENTE AL CONTROLADORT28, TABLA RELACIONADA EN LA BD => T28--> 
    <!--ARRAY OF DATE dateT28 BELONGING TO CONTROLADORT28, TABLE RELATED IN THE BD => T28-->

      @foreach($dateT28 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT28[$posicion][0]}}">{{$dateT28[$posicion][1]}}</label>  
                <div class="{{$dateT28[$posicion][3]}}">

                <span class="{{$dateT28[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT28[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT28[$posicion][0]}}" id="{{$dateT28[$posicion][0]}}" placeholder="{{$dateT28[$posicion][2]}}" aria-describedby="{{$dateT28[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

    <!--ARRAY DE FECHA date2T28 PERTENECIENTE AL CONTROLADORT28, TABLA RELACIONADA EN LA BD => T28--> 
    <!--ARRAY OF DATE date2T28 BELONGING TO CONTROLADORT28, TABLE RELATED IN THE BD => T28-->

      @foreach($date2T28 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T28[$posicion][0]}}">{{$date2T28[$posicion][1]}}</label>  
                <div class="{{$date2T28[$posicion][3]}}">

                <span class="{{$date2T28[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T28[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T28[$posicion][0]}}" id="{{$date2T28[$posicion][0]}}" placeholder="{{$date2T28[$posicion][2]}}" aria-describedby="{{$date2T28[$posicion][5]}}">
                          
                </div>
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