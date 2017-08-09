@extends('layouts.app')

@section('content')

	<div class="row">
	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
	</div>


	<div class="row separar">
		<div class="col-md-12">
			<h7><b>B) Aplicable solo para la forma de adquisición de Compra Directa (Consulta de Precios).</b></h7>
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

   <form role="form" id="formValidaT21" name="formValidaT21" method="POST" action="{{url('t21')}}">
    {{ csrf_field() }}

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

		@foreach($arrayT21 as $posicion => $valor)
    
		 <div class="col-md-4 {{$arrayT21[$posicion][4]}} form-group separar">
		    <label for="{{$arrayT21[$posicion][0]}}">{{$arrayT21[$posicion][1]}}</label>
                <input type="text" class="form-control" name="{{$arrayT21[$posicion][0]}}" id="{{$arrayT21[$posicion][0]}}" placeholder="{{$arrayT21[$posicion][2]}}" maxlength="{{$arrayT21[$posicion][3]}}" >
         </div>

    	@endforeach

		@foreach($dateT21 as $posicion => $valor)
                      
         <div class="col-md-4 form-group {{$dateT21[$posicion][6]}}"">
            <label for="{{$dateT21[$posicion][0]}}">{{$dateT21[$posicion][1]}}</label>	
                <div class="{{$dateT21[$posicion][3]}}">

                <span class="{{$dateT21[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT21[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT21[$posicion][0]}}" id="{{$dateT21[$posicion][0]}}" placeholder="{{$dateT21[$posicion][2]}}" aria-describedby="{{$dateT21[$posicion][5]}}">
                          
                 </div>
         </div>
        @endforeach

        @foreach($dateT212 as $posicion => $valor)
                      
         <div class="col-md-4 form-group {{$dateT211[$posicion][6]}}"">
            <label for="{{$dateT211[$posicion][0]}}">{{$dateT211[$posicion][1]}}</label>	
                <div class="{{$dateT211[$posicion][3]}}">

                <span class="{{$dateT211[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT211[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT211[$posicion][0]}}" id="{{$dateT211[$posicion][0]}}" placeholder="{{$dateT211[$posicion][2]}}" aria-describedby="{{$dateT211[$posicion][5]}}">
                          
                 </div>
         </div>
        @endforeach

        @foreach($dateT212 as $posicion => $valor)
                      
         <div class="col-md-4 form-group {{$dateT212[$posicion][6]}}"">
            <label for="{{$dateT212[$posicion][0]}}">{{$dateT212[$posicion][1]}}</label>	
                <div class="{{$dateT212[$posicion][3]}}">

                <span class="{{$dateT212[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT212[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT212[$posicion][0]}}" id="{{$dateT212[$posicion][0]}}" placeholder="{{$dateT212[$posicion][2]}}" aria-describedby="{{$dateT212[$posicion][5]}}">
                          
                 </div>
         </div>
        @endforeach
		

		<div class="row">
            <div class="col-md-12 form-group" ><br>
                <center>
                    <button type="submit" class="btn btn-lg btn-danger" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</button>
                             
                    <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                </center> 
            </div>
        </div>
   </form>   

@endsection