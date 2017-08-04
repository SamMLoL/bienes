@extends('layouts.app')
@section('content')

  
  <div class="row">
     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
  </div>

  <div class="row separar">
     <div class="col-md-12">
         <h7><b>A) Aplicable solo para las formas de adquisición de compra por concurso abierto o concurso cerrado.</b></h7>
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


    <form role="form" id="formValidaT2" name="formValidaT2" method="POST" action="{{url('t2')}}">
    {{ csrf_field() }}

  

          @foreach($traeseladqui as $posicion => $valor)
            
             <div class="col-md-4 {{$traeseladqui[$posicion][2]}} form-group separar">
                <label for="{{$traeseladqui[$posicion][0]}}">{{$traeseladqui[$posicion][1]}}</label>
                   <select name="{{$traeseladqui[$posicion][0]}}" id="{{$traeseladqui[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>

                   @foreach($traeselectT2 as $traeselect)
                      <option value="{{$traeselect->id}}">{{$traeselect->opcion}}</option> 
                   @endforeach
                   </select>
             </div>
          @endforeach
          
          @foreach($arrayt2 as $posicion => $valor)

        	    <div class="col-md-4 {{$arrayt2[$posicion][4]}} form-group separar">
					
				        	<label for="{{$arrayt2[$posicion][0]}}">{{$arrayt2[$posicion][1]}}</label>
                     
                  <input type="text" class="form-control" name="{{$arrayt2[$posicion][0]}}" id="{{$arrayt2[$posicion][0]}}" placeholder="{{$arrayt2[$posicion][2]}}" maxlength="{{$arrayt2[$posicion][3]}}" >

              </div>
             <!-- FINAL DEL FOREACH DE INPUTS TEXT --> 
            
              @if($arrayt2[$posicion][1] == "NÚMERO DE CONCURSO:")
               
                @foreach($datet2 as $posicion => $valor)
                      
                    <div class="col-md-4 form-group">
                      <label for="{{$datet2[$posicion][0]}}">{{$datet2[$posicion][1]}}</label>	
                        <div class="{{$datet2[$posicion][3]}}">

                          <span class="{{$datet2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$datet2[$posicion][2]}}" ></i></span>
                          
                          <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$datet2[$posicion][0]}}" id="{{$datet2[$posicion][0]}}" placeholder="{{$datet2[$posicion][2]}}" aria-describedby="{{$datet2[$posicion][5]}}">
                          
                        </div>
                    </div>
                @endforeach
                 
              @endif
             <!-- FINAL DEL FOREACH DE FECHA $datet2 --> 
           
              @if($arrayt2[$posicion][1] == "NÚMERO DE CONTRATO:")
                   
          @foreach($date2t2 as $posicion => $valor)
                
              <div class="col-md-4 form-group">
                <label for="{{$date2t2[$posicion][0]}}">{{$date2t2[$posicion][1]}}</label>  
                  <div class="{{$date2t2[$posicion][3]}}">

                    <span class="{{$date2t2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2t2[$posicion][2]}}" ></i></span>
                    
                    <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2t2[$posicion][0]}}" id="{{$date2t2[$posicion][0]}}" placeholder="{{$date2t2[$posicion][2]}}" aria-describedby="{{$datet2[$posicion][5]}}">
                    
                  </div>
              </div>
         
          @endforeach
            
            <!-- FINAL DEL FOREACH DE FECHA $date2t2 -->
              @endif
             
              @if($arrayt2[$posicion][1] == "NÚMERO DE LA NOTA DE ENTREGA:")
                   
                    @foreach($date3t2 as $posicion => $valor)
                
             <div class="col-md-4 form-group">
                <label for="{{$date3t2[$posicion][0]}}">{{$date3t2[$posicion][1]}}</label>  
                  <div class="{{$date3t2[$posicion][3]}}">

                    <span class="{{$date3t2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date3t2[$posicion][2]}}" ></i></span>
                    
                    <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date3t2[$posicion][0]}}" id="{{$date3t2[$posicion][0]}}" placeholder="{{$date3t2[$posicion][2]}}" aria-describedby="{{$date3t2[$posicion][5]}}">
                    
                  </div>
              </div>
         
                    @endforeach

              @endif
             <!-- FINAL DEL FOREACH DE FECHA $date3t2 -->

          @endforeach
     <!-- FINAL DE LOS 3 FOREACH $arrayt2 $datet2 $date3t2 DEL ROW GENERAL --> 
            
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



@endsection
