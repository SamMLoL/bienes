@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
    	<div class="row">
    	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> DACIÓN EN PAGO / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
    	</div>

    	<div class="row separar">
      		<div class="col-md-12">
      			<h6><b>D) APLICABLE SOLO PARA LAS FORMAS DE ADQUISICIÓN DE DACIÓN EN PAGO.</b></h6>
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

   	  <form role="form" id="formValidaT23" name="formValidaT23" method="POST" action="{{url('dacion')}}">
    	{{ csrf_field() }}

<div class="row">
   <div class="col-md-12">

    <!--ARRAY SELECT selectT23 PERTENECIENTE AL CONTROLADORT23, TABLA RELACIONADA EN LA BD => mig_selectT23 Y T23-->
    <!--ARRAY SELECT selectT23 BELONGING TO CONTROLADORT23, TABLE RELATED IN THE BD => mig_selectT23 AND T23-->

      @foreach($selectT23 as $posicion => $valor)

      <div class="col-md-4 {{$selectT23[$posicion][2]}} form-group  separar">
        <label for="{{$selectT23[$posicion][0]}}">{{$selectT23[$posicion][1]}}</label>
            <select name="{{$selectT23[$posicion][0]}}" id="{{$selectT23[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach
    
    <!--ARRAY DE INPUT-TEXT arrayT23 PERTENECIENTE AL CONTROLADORT23, TABLA RELACIONADA EN LA BD => T23-->
    <!--ARRAY OF INPUT-TEXT arrayT23 BELONGING TO CONTROLADORT23, TABLE RELATED IN THE BD => T23-->

      @foreach($arrayT23 as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$arrayT23[$posicion][4]}} separar">
            <label for="{{$arrayT23[$posicion][0]}}">{{$arrayT23[$posicion][1]}}</label>
              <input type="text" name="{{$arrayT23[$posicion][0]}}" id="{{$arrayT23[$posicion][0]}}" class="form-control" placeholder="{{$arrayT23[$posicion][2]}}" maxlength="{{$arrayT23[$posicion][3]}}" onkeypress="{{$arrayT23[$posicion][5]}}">
          </div>
      @endforeach

    <!--ARRAY DE FECHA dateT23 PERTENECIENTE AL CONTROLADORT23, TABLA RELACIONADA EN LA BD => T23--> 
    <!--ARRAY OF DATE dateT23 BELONGING TO CONTROLADORT23, TABLE RELATED IN THE BD => T23-->

      @foreach($dateT23 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT23[$posicion][0]}}">{{$dateT23[$posicion][1]}}</label>  
                <div class="{{$dateT23[$posicion][3]}}">

                <span class="{{$dateT23[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT23[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT23[$posicion][0]}}" id="{{$dateT23[$posicion][0]}}" placeholder="{{$dateT23[$posicion][2]}}" aria-describedby="{{$dateT23[$posicion][5]}}">
                          
                </div>
         </div>
      @endforeach

    <!--ARRAY DE FECHA date2T23 PERTENECIENTE AL CONTROLADORT23, TABLA RELACIONADA EN LA BD => T23--> 
    <!--ARRAY OF DATE date2T23 BELONGING TO CONTROLADORT23, TABLE RELATED IN THE BD => T23-->

      @foreach($date2T23 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T23[$posicion][0]}}">{{$date2T23[$posicion][1]}}</label>  
                <div class="{{$date2T23[$posicion][3]}}">

                <span class="{{$date2T23[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T23[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T23[$posicion][0]}}" id="{{$date2T23[$posicion][0]}}" placeholder="{{$date2T23[$posicion][2]}}" aria-describedby="{{$date2T23[$posicion][5]}}">
                          
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