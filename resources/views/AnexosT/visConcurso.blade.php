@extends('layouts.app')

@section('content')
 
<div class="row">
    <div class="col-md-12"> 
        <div class="row">
            <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> CONCURSO / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE .</b></h5></div>
        </div>
      
        <div class="row">
            <div class="col-md-12">
                 <h6><b>A) APLICABLE SOLO PARA LAS FORMAS DE ADQUISICIÓN DE COMPRA POR CONCURSO ABIERTO O CONCURSO CERRADO.</b></h6>
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
                @if($lastCod->codOrigen == 'A-1')
                  <b id="espaciar4"> A-1 </b>
                @else
                  <b id="espaciar3"> {{$lastCod->codOrigen}}</b>
                @endif
              @else
                  <b id="espaciar3">A2012001</b>
              @endif
              
                </b></li></li>
            </div>
        </div>

<hr>

        <div class="row"> 
            <div class="col-md-12 li moverIzq">
                <ul class="js-errors li"></ul>
            </div>
        </div>

      <form role="form" id="formValidaT2" name="formValidaT2" method="POST" action="{{url('concurso')}}">
        {{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <!--ARRAY SELECT PERTENECIENTE AL CONTROLADORT2, TABLA RELACIONADA EN LA BD => mig_selectT2 Y T2-->
        <!--ARRAY SELECT BELOW TO CONTROLADORT2, RELATED TABLE IN BD => mig_selectT2 AND T2-->

          @foreach($selectT2 as $posicion => $valor)
              <div class="col-md-4 {{$selectT2[$posicion][2]}} form-group separar">
               <label for="{{$selectT2[$posicion][0]}}">{{$selectT2[$posicion][1]}}</label>
                  <select name="{{$selectT2[$posicion][0]}}" id="{{$selectT2[$posicion][0]}}" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                  @foreach($infoSelect as $traeSelect)
                   <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
                  @endforeach
                </select>
              </div>
          @endforeach
        
        <!--ARRAY DE INPUT-TEXT PERTENECIENTE AL CONTROLADORT2, TABLA RELACIONADA EN LA BD => T2-->
        <!--ARRAY OF INPUT-TEXT BELONGING TO CONTROLADORT2, TABLE RELATED IN THE BD => T2-->
  
          @foreach($arrayt2 as $posicion => $valor)

        	    <div class="col-md-4 {{$arrayt2[$posicion][4]}} form-group separar">
					
				        	<label for="{{$arrayt2[$posicion][0]}}">{{$arrayt2[$posicion][1]}}</label>
                     
                  <input type="text" class="form-control" name="{{$arrayt2[$posicion][0]}}" id="{{$arrayt2[$posicion][0]}}" placeholder="{{$arrayt2[$posicion][2]}}" maxlength="{{$arrayt2[$posicion][3]}}" >

              </div>

        <!--ARRAY DE FECHA datet2 PERTENECIENTE AL CONTROLADORT2, TABLA RELACIONADA EN LA BD => T2--> 
        <!--ARRAY OF DATE datet2 BELONGING TO CONTROLADORT2, TABLE RELATED IN THE BD => T2-->
            
          @endforeach
         
          @foreach($datet2 as $posicion => $valor)
                
             <div class="col-md-4 form-group">
                <label for="{{$datet2[$posicion][0]}}">{{$datet2[$posicion][1]}}</label>  
                  <div class="{{$datet2[$posicion][3]}}">

                    <span class="{{$datet2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$datet2[$posicion][2]}}" ></i></span>
                    
                    <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$datet2[$posicion][0]}}" id="{{$datet2[$posicion][0]}}" placeholder="{{$datet2[$posicion][2]}}" aria-describedby="{{$datet2[$posicion][5]}}">
                    
                  </div>
              </div>
         
          @endforeach
        
        <!--ARRAY DE FECHA date2t2 PERTENECIENTE AL CONTROLADORT2, TABLA RELACIONADA EN LA BD => T2--> 
        <!--ARRAY OF DATE date2t2 BELONGING TO CONTROLADORT2, TABLE RELATED IN THE BD => T2-->

          @foreach($date2t2 as $posicion => $valor)
                
             <div class="col-md-4 form-group">
                <label for="{{$date2t2[$posicion][0]}}">{{$date2t2[$posicion][1]}}</label>  
                  <div class="{{$date2t2[$posicion][3]}}">

                    <span class="{{$date2t2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2t2[$posicion][2]}}" ></i></span>
                    
                    <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2t2[$posicion][0]}}" id="{{$date2t2[$posicion][0]}}" placeholder="{{$date2t2[$posicion][2]}}" aria-describedby="{{$date2t2[$posicion][5]}}">
                    
                  </div>
              </div>
         
          @endforeach
        
        <!--ARRAY DE FECHA date3t2 PERTENECIENTE AL CONTROLADORT2, TABLA RELACIONADA EN LA BD => T2--> 
        <!--ARRAY OF DATE date3t2 BELONGING TO CONTROLADORT2, TABLE RELATED IN THE BD => T2-->

          @foreach($date3t2 as $posicion => $valor)
                
             <div class="col-md-4 form-group">
                <label for="{{$date3t2[$posicion][0]}}">{{$date3t2[$posicion][1]}}</label>  
                  <div class="{{$date3t2[$posicion][3]}}">

                    <span class="{{$date3t2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date3t2[$posicion][2]}}" ></i></span>
                    
                    <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date3t2[$posicion][0]}}" id="{{$date3t2[$posicion][0]}}" placeholder="{{$date3t2[$posicion][2]}}" aria-describedby="{{$date3t2[$posicion][5]}}">
                    
                  </div>
              </div>
         
          @endforeach
    </div>
</div>

    <!-- FINAL DE LOS 3 FOREACH $arrayt2 $datet2 $date3t2 DEL ROW GENERAL --> 
            
              <div class="row">
                  <div class="col-md-12 form-group" ><br>
                      <center>
                         <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                             
                         <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><b> Salir</b></a>  
                      </center> 
                  </div>
              </div>

      </form>            
    <!-- FIN CONTAINER -->
  </div>
</div>
@endsection
