@extends('layouts.app')

@section('content')

	<div class="row">
	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>ANEXO T-2-2 / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
	</div>


	<div class="row separar">
		<div class="col-md-12">
			<h7><b>C) Aplicable solo para la forma de adquisición de Confiscación.</b></h7>
		</div>
	</div>
	
	<div class="row">
      <div class="col-md-12 separar">
        <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
         <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO.</b></h6>
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

    <div class="row"> 
      <div class="col-md-12 li separar moverIzq">
          <ul class="js-errors li"></ul>
      </div>
    </div>
   
<div class="row">
   <div class="col-md-12">
   	  <form role="form" id="formValidaT22" name="formValidaT22" method="POST" action="{{url('t22')}}">
    	{{ csrf_field() }}

    <!--ARRAY SELECT selectT22 PERTENECIENTE AL CONTROLADORT22, TABLA RELACIONADA EN LA BD => mig_selectT22 Y T22-->
    <!--ARRAY SELECT selectT22 BELONGING TO CONTROLADORT22, TABLE RELATED IN THE BD => mig_selectT22 AND T22-->

      @foreach($selectT22 as $posicion => $valor)
            
             <div class="col-md-4 {{$selectT22[$posicion][2]}} form-group  separar">
                <label for="{{$selectT22[$posicion][0]}}">{{$selectT22[$posicion][1]}}</label>
                   <select name="{{$selectT22[$posicion][0]}}" id="{{$selectT22[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>

                   @foreach($infoSelect as $traeSelect)
                      <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
                   @endforeach
                   </select>
             </div>
      @endforeach
    
    <!--ARRAY DE INPUT-TEXT arrayT22 PERTENECIENTE AL CONTROLADORT22, TABLA RELACIONADA EN LA BD => T22-->
    <!--ARRAY OF INPUT-TEXT arrayT22 BELONGING TO CONTROLADORT22, TABLE RELATED IN THE BD => T22-->

		  @foreach($arrayT22 as $posicion => $valor)
       
          <div class="col-md-4 form-group {{$arrayT22[$posicion][4]}} separar">
            <label for="{{$arrayT22[$posicion][0]}}">{{$arrayT22[$posicion][1]}}</label>
              <input type="text" name="{{$arrayT22[$posicion][0]}}" id="{{$arrayT22[$posicion][0]}}" class="form-control" placeholder="{{$arrayT22[$posicion][2]}}"  >
          </div>
      @endforeach
      
    <!--ARRAY DE FECHA dateT22 PERTENECIENTE AL CONTROLADORT22, TABLA RELACIONADA EN LA BD => T22--> 
    <!--ARRAY OF DATE dateT22 BELONGING TO CONTROLADORT22, TABLE RELATED IN THE BD => T22-->

      @foreach($dateT22 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT22[$posicion][0]}}">{{$dateT22[$posicion][1]}}</label>  
                <div class="{{$dateT22[$posicion][3]}}">

                <span class="{{$dateT22[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT22[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT22[$posicion][0]}}" id="{{$dateT22[$posicion][0]}}" placeholder="{{$dateT22[$posicion][2]}}" aria-describedby="{{$dateT22[$posicion][5]}}">
                          
                </div>
         </div>
      @endforeach

    <!--ARRAY DE FECHA date2T22 PERTENECIENTE AL CONTROLADORT22, TABLA RELACIONADA EN LA BD => T22--> 
    <!--ARRAY OF DATE date2T22 BELONGING TO CONTROLADORT22, TABLE RELATED IN THE BD => T22-->

      @foreach($date2T22 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T22[$posicion][0]}}">{{$date2T22[$posicion][1]}}</label>  
                <div class="{{$date2T22[$posicion][3]}}">

                <span class="{{$date2T22[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T22[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T22[$posicion][0]}}" id="{{$date2T22[$posicion][0]}}" placeholder="{{$date2T22[$posicion][2]}}" aria-describedby="{{$date2T22[$posicion][5]}}">
                          
                </div>
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