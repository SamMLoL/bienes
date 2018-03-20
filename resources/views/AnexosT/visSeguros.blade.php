@extends('layouts.app')

@section('content')

	<div class="row">
	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b><i class="fa fa-file-o" aria-hidden="true"></i> SEGUROS / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
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
            <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"> <center><b>Ultimo Registro</b></center>
            <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><center><b>Código del Proveedor</b></center>
           
            @if($lastCod)
                @if($lastCod->codRegT3 == '99')
                  <center><b id="color"> 99 </b></center>
                @else
                  <center><b id="color"> {{$lastCod->codRegT3}}</b></center>
                @endif
               </b>
            @else
               <center>EMPRSEG001</center>
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
   
<div class="row">
   <div class="col-md-12">
   	  <form role="form" id="formValidaT3" name="formValidaT3" method="POST" action="{{url('seguros')}}">
    	{{ csrf_field() }}


      @foreach($codRegT3 as $posicion => $valor)
      
      <div class="col-md-4 form-group separar">
          <label for="{{$codRegT3[$posicion][0]}}">{{$codRegT3[$posicion][1]}}</label>
          <input type="text" name="{{$codRegT3[$posicion][0]}}" id="{{$codRegT3[$posicion][0]}}" class="form-control" placeholder="{{$codRegT3[$posicion][2]}}" maxlength="{{$codRegT3[$posicion][3]}}">
      </div>
      @endforeach
      
    
      @foreach($selectCompAse as $posicion => $valor)

      <div class="col-md-4 form-group  separar">
        <label for="{{$selectCompAse[$posicion][0]}}">{{$selectCompAse[$posicion][1]}}</label>
            <select name="{{$selectCompAse[$posicion][0]}}" id="{{$selectCompAse[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach
      

      @foreach($otraCompa as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$otraCompa[$posicion][4]}} separar">
          <label for="{{$otraCompa[$posicion][0]}}">{{$otraCompa[$posicion][1]}}</label>
          <input type="text" name="{{$otraCompa[$posicion][0]}}" id="{{$otraCompa[$posicion][0]}}" class="form-control" placeholder="{{$otraCompa[$posicion][2]}}" maxlength="{{$otraCompa[$posicion][3]}}" disabled>
      </div>
      @endforeach


      @foreach($numPoli as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$numPoli[$posicion][4]}} separar">
          <label for="{{$numPoli[$posicion][0]}}">{{$numPoli[$posicion][1]}}</label>
          <input type="text" name="{{$numPoli[$posicion][0]}}" id="{{$numPoli[$posicion][0]}}" class="form-control" placeholder="{{$numPoli[$posicion][2]}}" maxlength="{{$numPoli[$posicion][3]}}">
      </div>
      @endforeach


    @foreach($selectPoli as $posicion => $valor)

      <div class="col-md-4 form-group  separar">
        <label for="{{$selectPoli[$posicion][0]}}">{{$selectPoli[$posicion][1]}}</label>
            <select name="{{$selectPoli[$posicion][0]}}" id="{{$selectPoli[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect1 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach
  

      @foreach($montoAse as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$montoAse[$posicion][4]}} separar">
          <label for="{{$montoAse[$posicion][0]}}">{{$montoAse[$posicion][1]}}</label>
          <input type="text" name="{{$montoAse[$posicion][0]}}" id="{{$montoAse[$posicion][0]}}" class="form-control money" placeholder="{{$montoAse[$posicion][2]}}" maxlength="{{$montoAse[$posicion][3]}}">
      </div>
      @endforeach
      
    
      @foreach($selectMoneda as $posicion => $valor)

      <div class="col-md-4 {{$selectMoneda[$posicion][2]}} form-group  separar">
        <label for="{{$selectMoneda[$posicion][0]}}">{{$selectMoneda[$posicion][1]}}</label>
            <select name="{{$selectMoneda[$posicion][0]}}" id="{{$selectMoneda[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect2 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

      @foreach($desMoneda as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$desMoneda[$posicion][4]}} separar">
          <label for="{{$desMoneda[$posicion][0]}}">{{$desMoneda[$posicion][1]}}</label>
          <input type="text" name="{{$desMoneda[$posicion][0]}}" id="{{$desMoneda[$posicion][0]}}" class="form-control" placeholder="{{$desMoneda[$posicion][2]}}" maxlength="{{$desMoneda[$posicion][3]}}" disabled>
      </div>
      @endforeach


      @foreach($datet1 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$datet1[$posicion][0]}}">{{$datet1[$posicion][1]}}</label>  
                <div class="{{$datet1[$posicion][3]}}">

                <span class="{{$datet1[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$datet1[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$datet1[$posicion][0]}}" id="{{$datet1[$posicion][0]}}" placeholder="{{$datet1[$posicion][2]}}" aria-describedby="{{$datet1[$posicion][5]}}">
                          
                </div>
         </div>
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

      @foreach($selectRes as $posicion => $valor)

      <div class="col-md-4 form-group separar">
        <label for="{{$selectRes[$posicion][0]}}">{{$selectRes[$posicion][1]}}</label>
            <select name="{{$selectRes[$posicion][0]}}" id="{{$selectRes[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect3 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

      @foreach($selectCobe as $posicion => $valor)

      <div class="col-md-4 form-group separar">
        <label for="{{$selectCobe[$posicion][0]}}">{{$selectCobe[$posicion][1]}}</label>
            <select name="{{$selectCobe[$posicion][0]}}" id="{{$selectCobe[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect4 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

      @foreach($espeCobe as $posicion => $valor)
      
      <div class="col-md-4 form-group separar">
            <label for="{{$espeCobe[$posicion][0]}}">{{$espeCobe[$posicion][1]}}</label>
              <input type="text" name="{{$espeCobe[$posicion][0]}}" id="{{$espeCobe[$posicion][0]}}" class="form-control"  placeholder="{{$espeCobe[$posicion][2]}}" maxlength="{{$espeCobe[$posicion][3]}}" disabled>
          </div>
      @endforeach

      @foreach($descCobe as $posicion => $valor)
      
      <div class="col-md-4 form-group separar">
            <label for="{{$descCobe[$posicion][0]}}">{{$descCobe[$posicion][1]}}</label>
              <input type="text" name="{{$descCobe[$posicion][0]}}" id="{{$descCobe[$posicion][0]}}" class="form-control"  placeholder="{{$descCobe[$posicion][2]}}" maxlength="{{$descCobe[$posicion][3]}}">
          </div>
      @endforeach

	    	<div class="row">
              <div class="col-md-12 form-group" ><br>
                           
                  <center><button type="submit" class="btn btn-md btn-success" name="#" title="Guardar Registro"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                          
                  <a href="{{url('home')}}" class="btn btn-md btn-danger" title="Salir" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><b>Salir</b></a></center>  

              </div>
        </div>
     </form> 
   </div>  
</div>

@endsection
