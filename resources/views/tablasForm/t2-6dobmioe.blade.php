@extends('layouts.app')

@section('content')

	<div class="row">
	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>ANEXO T-2-6 / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
	</div>

	<div class="row separar">
		<div class="col-md-12">
			<h7><b>G) Aplicable solo para la forma de adquisición de Permuta.</b></h7>
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
   	  <form role="form" id="formValidaT26" name="formValidaT26" method="POST" action="{{url('t26')}}">
    	{{ csrf_field() }}

    <!--ARRAY SELECT selectT26 PERTENECIENTE AL CONTROLADORT26, TABLA RELACIONADA EN LA BD => mig_selectT26 Y T26-->
    <!--ARRAY SELECT selectT26 BELONGING TO CONTROLADORT26, TABLE RELATED IN THE BD => mig_selectT26 AND T26-->
      
      @foreach($selectT26 as $posicion => $valor)
      <div class="col-md-4 {{$selectT26[$posicion][2]}} form-group separar">
          <label for="{{$selectT26[$posicion][0]}}">{{$selectT26[$posicion][1]}}</label>
              <select name="{{$selectT26[$posicion][0]}}" id="{{$selectT26[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
          </div>
      @endforeach

    <!--ARRAY DE INPUT-TEXT arrayT26 PERTENECIENTE AL CONTROLADORT26, TABLA RELACIONADA EN LA BD => T26-->
    <!--ARRAY OF INPUT-TEXT arrayT26 BELONGING TO CONTROLADORT26, TABLE RELATED IN THE BD => T26-->

      @foreach($arrayT26 as $posicion => $valor)
       
       <div class="col-md-4 {{$arrayT26[$posicion][4]}} form-group separar">
         <label for="">{{$arrayT26[$posicion][1]}}</label>
         <input type="text" class="form-control" id="{{$arrayT26[$posicion][0]}}" name="{{$arrayT26[$posicion][0]}}" placeholder="{{$arrayT26[$posicion][2]}}" maxlength="{{$arrayT26[$posicion][3]}}">
       </div> 
        
      @endforeach

      @foreach($dateT26 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT26[$posicion][0]}}">{{$dateT26[$posicion][1]}}</label>  
                <div class="{{$dateT26[$posicion][3]}}">

                <span class="{{$dateT26[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT26[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT26[$posicion][0]}}" id="{{$dateT26[$posicion][0]}}" placeholder="{{$dateT26[$posicion][2]}}" aria-describedby="{{$dateT26[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

    <!--ARRAY DE FECHA date2T26 PERTENECIENTE AL CONTROLADORT26, TABLA RELACIONADA EN LA BD => T26--> 
    <!--ARRAY OF DATE date2T26 BELONGING TO CONTROLADORT26, TABLE RELATED IN THE BD => T26-->

      @foreach($date2T26 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T26[$posicion][0]}}">{{$date2T26[$posicion][1]}}</label>  
                <div class="{{$date2T26[$posicion][3]}}">

                <span class="{{$date2T26[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T26[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T26[$posicion][0]}}" id="{{$date2T26[$posicion][0]}}" placeholder="{{$date2T26[$posicion][2]}}" aria-describedby="{{$date2T26[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

    <!--ARRAY DE FECHA date3T26 PERTENECIENTE AL CONTROLADORT26, TABLA RELACIONADA EN LA BD => T26--> 
    <!--ARRAY OF DATE date3T26 BELONGING TO CONTROLADORT26, TABLE RELATED IN THE BD => T26-->

      @foreach($date3T26 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date3T26[$posicion][0]}}">{{$date3T26[$posicion][1]}}</label>  
                <div class="{{$date3T26[$posicion][3]}}">

                <span class="{{$date3T26[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date3T26[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date3T26[$posicion][0]}}" id="{{$date3T26[$posicion][0]}}" placeholder="{{$date3T26[$posicion][2]}}" aria-describedby="{{$date3T26[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

	      <div class="row">
            <div class="col-md-12 form-group"><br>
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