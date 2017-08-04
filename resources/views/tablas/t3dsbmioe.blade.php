@extends('layouts.app')

@section('content')
<div class="container" id="sha">
  
  <!--FINAL DEL ROW BANNER --> 

  <div class="row">
      <div class="panel-heading text-center separar"><h5><b>DATOS DEL SEGURO DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
  </div>
   
  <form role="form" id="formValidaT3" name="formValidaT3" method="POST" >
    {{ csrf_field() }}
	   
      <div class="row">
     
    	   @foreach($prueba as $posicion => $valor) 
    			
        		  <div class="col-md-4 form-group"><br>

        		  	 <label for="{{$prueba[$posicion][0]}}">{{$prueba[$posicion][1]}}</label><br>

        		   	 <input type="text" name="{{$prueba[$posicion][0]}}" id="{{$prueba[$posicion][0]}}" class="form-control" placeholder="{{$prueba[$posicion][2]}}" maxlength="{{$prueba[$posicion][3]}}" autofocus>
        		   	
              </div>
        
    				@if( $prueba[$posicion][1] == "POSEE RESPONSABILIDAD CIVIL:")
    				   @foreach($datet3 as $posicion => $valor) 

    		   		<div class="col-md-4 form-group"><br>
    						  
                  <label for="{{$datet3[$posicion][0]}}">{{$datet3[$posicion][1]}}</label><br>
    		   			  
                  <input type="text" name="{{$datet3[$posicion][0]}}" id="{{$datet3[$posicion][0]}}" class="form-control calendario">
                  
                   
    		    	</div>
    		   
    					@endforeach
    				@endif
     		@endforeach
      <!-- FINAL DEL ROW-FOREACH $prueba-->
      </div>
                 <hr>
                    <div class="row">
                       <div class="col-md-12 form-group" ><br>
                            <center>
                              <button type="submit" class="btn btn-lg btn-danger" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</button>
                             
                             <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                            </center> 
                      </div>
                    </div>
  </form>
  <!-- FIN CONTAINER -->
</div>

@endsection
