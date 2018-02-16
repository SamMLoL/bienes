@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
    	<div class="row">
    	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> DONACIÓN / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
    	</div>

    	<div class="row separar">
      		<div class="col-md-12">
      			  <h7><b>E) Aplicable solo para la forma de adquisición de Donación.</b></h7>
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
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Origen</b> 

              @if($lastCod)
                @if($lastCod->codOt2_4 == 'E-1')
                  <center><b id="color"> E-1 </b></center>
                @else
                  </center><b id="color"> {{$lastCod->codOt2_4}}</b></center>
                @endif
              @else
                  </center><b id="color">E2012001</b></center>
              @endif
              
                </li></li>
            </div>
      </div>

<hr>

      <div class="row"> 
          <div class="col-md-12 li moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
   

   	  <form role="form" id="formValidaT24" name="formValidaT24" method="POST" action="{{url('donacion')}}">
    	{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
    <!--ARRAY SELECT selectT24 PERTENECIENTE AL CONTROLADORT24, TABLA RELACIONADA EN LA BD => mig_selectT24 Y T24-->
    <!--ARRAY SELECT selectT24 BELONGING TO CONTROLADORT24, TABLE RELATED IN THE BD => mig_selectT24 AND T24-->

        @foreach($selectT24 as $posicion => $valor)
    		  <div class="col-md-4 {{$selectT24[$posicion][2]}} form-group separar">
            	<label for="{{$selectT24[$posicion][0]}}">{{$selectT24[$posicion][1]}}</label>
                  <select name="{{$selectT24[$posicion][0]}}" id="{{$selectT24[$posicion][0]}}" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                  @foreach($infoSelect as $traeSelect)
                   <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
                  @endforeach
                </select>
              </div>
  		  @endforeach

    <!--ARRAY DE INPUT-TEXT arrayT24 PERTENECIENTE AL CONTROLADORT24, TABLA RELACIONADA EN LA BD => T24-->
    <!--ARRAY OF INPUT-TEXT arrayT24 BELONGING TO CONTROLADORT24, TABLE RELATED IN THE BD => T24-->

		    @foreach($arrayT24 as $posicion => $valor)
		  
		      <div class="col-md-4 form-group {{$arrayT24[$posicion][4]}} separar">
            <label for="{{$arrayT24[$posicion][0]}}">{{$arrayT24[$posicion][1]}}</label>
              <input type="text" name="{{$arrayT24[$posicion][0]}}" id="{{$arrayT24[$posicion][0]}}" class="form-control" placeholder="{{$arrayT24[$posicion][2]}}" maxlength="{{$arrayT24[$posicion][3]}}" onkeypress="{{$arrayT24[$posicion][5]}}">
          </div>

		    @endforeach

    <!--ARRAY DE FECHA dateT24 PERTENECIENTE AL CONTROLADORT24, TABLA RELACIONADA EN LA BD => T24--> 
    <!--ARRAY OF DATE dateT24 BELONGING TO CONTROLADORT24, TABLE RELATED IN THE BD => T24-->

		    @foreach($dateT24 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT24[$posicion][0]}}">{{$dateT24[$posicion][1]}}</label>  
                <div class="{{$dateT24[$posicion][3]}}">

                <span class="{{$dateT24[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT24[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT24[$posicion][0]}}" id="{{$dateT24[$posicion][0]}}" placeholder="{{$dateT24[$posicion][2]}}" aria-describedby="{{$dateT24[$posicion][5]}}">
                          
                </div>
          </div>
      	@endforeach
        
    <!--ARRAY DE FECHA date2T24 PERTENECIENTE AL CONTROLADORT24, TABLA RELACIONADA EN LA BD => T24--> 
    <!--ARRAY OF DATE date2T24 BELONGING TO CONTROLADORT24, TABLE RELATED IN THE BD => T24-->

      	@foreach($date2T24 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T24[$posicion][0]}}">{{$date2T24[$posicion][1]}}</label>  
                <div class="{{$date2T24[$posicion][3]}}">

                <span class="{{$date2T24[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T24[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T24[$posicion][0]}}" id="{{$date2T24[$posicion][0]}}" placeholder="{{$date2T24[$posicion][2]}}" aria-describedby="{{$date2T24[$posicion][5]}}">
                          
                </div>
         </div>
      	@endforeach
    </div>
</div>
	    <div class="row">
            <div class="col-md-12 form-group" ><br>
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