@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
    	<div class="row">
    	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> COMPRA DIRECTA / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE .</b></h5></div>
    	</div>


      	<div class="row separar">
        	<div class="col-md-12">
        		<h6><b>B) APLICABLE SOLO PARA LA FORMA DE ADQUISICIÓN DE COMPRA DIRECTA (CONSULTA DE PRECIOS).</b></h6>
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
                @if($lastCod->codOt2_1 == 'B-1')
                  <center><b id="color"> B-1 </b></center>
                @else
                  <center><b id="color"> {{$lastCod->codOt2_1}}</b></center>
                @endif
              @else
                  <center><b id="color">B2012001</b></center>
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

   	  <form role="form" id="formValidaT21" name="formValidaT21" method="POST" action="{{url('directa')}}">
    	{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">

    <!--ARRAY SELECT selectT21 PERTENECIENTE AL CONTROLADORDIRECTA, TABLA RELACIONADA EN LA BD => sel_directa Y directa-->
    <!--ARRAY SELECT selectT21 BELONGING TO CONTROLADORDIRECTA, TABLE RELATED IN THE BD => sel_directa AND directa-->

    	@foreach($selectT21 as $posicion => $valor)
            
             <div class="col-md-4 {{$selectT21[$posicion][2]}} form-group  separar">
                <label for="{{$selectT21[$posicion][0]}}">{{$selectT21[$posicion][1]}}</label>
                   <select name="{{$selectT21[$posicion][0]}}" id="{{$selectT21[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>

                   @foreach($infoSelect as $traeSelect)
                      <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
                   @endforeach
                   </select>
             </div>
        @endforeach

        @foreach($selectT22 as $posicion => $valor)
            
             <div class="col-md-4 {{$selectT22[$posicion][2]}} form-group  separar">
                <label for="{{$selectT22[$posicion][0]}}">{{$selectT22[$posicion][1]}}</label>
                   <select name="{{$selectT22[$posicion][0]}}" id="{{$selectT22[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>
            
                   @foreach($infoSelect2 as $traeSelect)
                     
                    @if($traeSelect->codProvee == 'anulado')
                    
                    @else
                      <option value="{{$traeSelect->id}}">{{$traeSelect->codProvee}}</option> 
                    @endif

                   @endforeach
                   </select>
             </div>
        @endforeach

    <!--ARRAY DE INPUT-TEXT PERTENECIENTE AL CONTROLADORT21, TABLA RELACIONADA EN LA BD => T21-->
    <!--ARRAY OF INPUT-TEXT BELONGING TO CONTROLADORT21, TABLE RELATED IN THE BD => T21-->

		@foreach($arrayT21 as $posicion => $valor)
    
		 <div class="col-md-4 {{$arrayT21[$posicion][4]}} form-group separar">
		    <label for="{{$arrayT21[$posicion][0]}}">{{$arrayT21[$posicion][1]}}</label>
                <input type="text" class="form-control" name="{{$arrayT21[$posicion][0]}}" id="{{$arrayT21[$posicion][0]}}" placeholder="{{$arrayT21[$posicion][2]}}" maxlength="{{$arrayT21[$posicion][3]}}" >
         </div>

    	@endforeach

    <!--ARRAY DE FECHA dateT21 PERTENECIENTE AL CONTROLADORT21, TABLA RELACIONADA EN LA BD => T21--> 
    <!--ARRAY OF DATE dateT21 BELONGING TO CONTROLADORT21, TABLE RELATED IN THE BD => T21-->

		@foreach($dateT21 as $posicion => $valor)
                      
         <div class="col-md-4 form-group">
            <label for="{{$dateT21[$posicion][0]}}">{{$dateT21[$posicion][1]}}</label>	
                <div class="{{$dateT21[$posicion][3]}}">

                <span class="{{$dateT21[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT21[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT21[$posicion][0]}}" id="{{$dateT21[$posicion][0]}}" placeholder="{{$dateT21[$posicion][2]}}" aria-describedby="{{$dateT21[$posicion][5]}}">
                          
                 </div>
         </div>
        @endforeach

    <!--ARRAY DE FECHA dateT212 PERTENECIENTE AL CONTROLADORT21, TABLA RELACIONADA EN LA BD => T21--> 
    <!--ARRAY OF DATE dateT212 BELONGING TO CONTROLADORT21, TABLE RELATED IN THE BD => T21-->

        @foreach($dateT212 as $posicion => $valor)
                      
         <div class="col-md-4 form-group">
            <label for="{{$dateT211[$posicion][0]}}">{{$dateT211[$posicion][1]}}</label>	
                <div class="{{$dateT211[$posicion][3]}}">

                <span class="{{$dateT211[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT211[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT211[$posicion][0]}}" id="{{$dateT211[$posicion][0]}}" placeholder="{{$dateT211[$posicion][2]}}" aria-describedby="{{$dateT211[$posicion][5]}}">
                          
                 </div>
         </div>
        @endforeach
    
    <!--ARRAY DE FECHA dateT212 PERTENECIENTE AL CONTROLADORT21, TABLA RELACIONADA EN LA BD => T21--> 
    <!--ARRAY OF DATE dateT212 BELONGING TO CONTROLADORT21, TABLE RELATED IN THE BD => T21-->
    
        @foreach($dateT212 as $posicion => $valor)
                      
         <div class="col-md-4 form-group">
            <label for="{{$dateT212[$posicion][0]}}">{{$dateT212[$posicion][1]}}</label>	
                <div class="{{$dateT212[$posicion][3]}}">

                <span class="{{$dateT212[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT212[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT212[$posicion][0]}}" id="{{$dateT212[$posicion][0]}}" placeholder="{{$dateT212[$posicion][2]}}" aria-describedby="{{$dateT212[$posicion][5]}}">
                          
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