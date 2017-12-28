@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
    	<div class="row">
    	    <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> TRANSFERENCIA / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
      </div>

    	<div class="row separar">
      		<div class="col-md-12">
      			<h7><b>H) Aplicable solo para la forma de adquisición de Transferencia.</b></h7>
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
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Origen</b> <b id="espaciar">  
            
              @if($lastCod)
                @if($lastCod->codOt2_7 == 'H-1')
                  <b id="espaciar4"> H-1 </b>
                @else
                  <b id="espaciar3"> {{$lastCod->codOt2_7}}</b>
                @endif
              @else
                  <b id="espaciar3">H2012000</b>
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
   

   	  <form role="form" id="formValidaT27" name="formValidaT27" method="POST" action="{{url('transferencia')}}">
    	{{ csrf_field() }}

   <!--ARRAY SELECT selectT27 PERTENECIENTE AL CONTROLADORT27, TABLA RELACIONADA EN LA BD => mig_selectT27 Y T27-->
   <!--ARRAY SELECT selectT27 BELONGING TO CONTROLADORT27, TABLE RELATED IN THE BD => mig_selectT27 AND T27-->
<div class="row separar">     
    <div class="col-md-12">

      @foreach($selectT27 as $posicion => $valor)
      <div class="col-md-4 {{$selectT27[$posicion][2]}} form-group separar">
          <label for="{{$selectT27[$posicion][0]}}">{{$selectT27[$posicion][1]}}</label>
            <select name="{{$selectT27[$posicion][0]}}" id="{{$selectT27[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>
      @endforeach

   <!--ARRAY DE INPUT-TEXT arrayT27 PERTENECIENTE AL CONTROLADORT27, TABLA RELACIONADA EN LA BD => T27-->
   <!--ARRAY OF INPUT-TEXT arrayT27 BELONGING TO CONTROLADORT27, TABLE RELATED IN THE BD => T27-->

      @foreach($arrayT27 as $posicion => $valor)
       
       <div class="col-md-4 {{$arrayT27[$posicion][4]}} form-group separar">
           <label for="">{{$arrayT27[$posicion][1]}}</label>
           <input type="text" class="form-control" id="{{$arrayT27[$posicion][0]}}" name="{{$arrayT27[$posicion][0]}}" placeholder="{{$arrayT27[$posicion][2]}}" maxlength="{{$arrayT27[$posicion][3]}}" onkeypress="{{$arrayT27[$posicion][5]}}">
       </div> 
        
      @endforeach

   <!--ARRAY DE FECHA dateT27 PERTENECIENTE AL CONTROLADORT27, TABLA RELACIONADA EN LA BD => T27--> 
   <!--ARRAY OF DATE dateT27 BELONGING TO CONTROLADORT27, TABLE RELATED IN THE BD => T27-->

      @foreach($dateT27 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT27[$posicion][0]}}">{{$dateT27[$posicion][1]}}</label>  
                <div class="{{$dateT27[$posicion][3]}}">

                <span class="{{$dateT27[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT27[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT27[$posicion][0]}}" id="{{$dateT27[$posicion][0]}}" placeholder="{{$dateT27[$posicion][2]}}" aria-describedby="{{$dateT27[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

   <!--ARRAY DE FECHA date2T27 PERTENECIENTE AL CONTROLADORT27, TABLA RELACIONADA EN LA BD => T27--> 
   <!--ARRAY OF DATE date2T27 BELONGING TO CONTROLADORT27, TABLE RELATED IN THE BD => T27-->

      @foreach($date2T27 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T27[$posicion][0]}}">{{$date2T27[$posicion][1]}}</label>  
                <div class="{{$date2T27[$posicion][3]}}">

                <span class="{{$date2T27[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T27[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T27[$posicion][0]}}" id="{{$date2T27[$posicion][0]}}" placeholder="{{$date2T27[$posicion][2]}}" aria-describedby="{{$date2T27[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

   <!--ARRAY DE FECHA date2T27 PERTENECIENTE AL CONTROLADORT27, TABLA RELACIONADA EN LA BD => T27--> 
   <!--ARRAY OF DATE date2T27 BELONGING TO CONTROLADORT27, TABLE RELATED IN THE BD => T27-->

      @foreach($date2T27 as $posicion => $valor)
       
          <div class="col-md-4 form-group separar">
            <label for="{{$date2T27[$posicion][0]}}">{{$date2T27[$posicion][1]}}</label>  
                <div class="{{$date2T27[$posicion][3]}}">

                <span class="{{$date2T27[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T27[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T27[$posicion][0]}}" id="{{$date2T27[$posicion][0]}}" placeholder="{{$date2T27[$posicion][2]}}" aria-describedby="{{$date2T27[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach
    </div>
</div>
	      <div class="row separar">
            <div class="col-md-12 form-group separar">
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