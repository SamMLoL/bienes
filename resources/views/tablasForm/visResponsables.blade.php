@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
      <div class="row">
          <div class="panel-heading text-center separar"><h5><b><i class="fa fa-file-o" aria-hidden="true"></i> RESPONSABLES DE LOS BIENES / DATOS DE LOS RESPONSABLES DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
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

      <form role="form" id="formValidaT4" name="formValidaT4" method="POST" action="{{url('responsables')}}">
      {{ csrf_field() }}

    <!--ARRAY SELECT select PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => mig_selectT4 Y T4-->
    <!--ARRAY SELECT select BELONGING TO CONTROLADORT4, TABLE RELATED IN THE BD => mig_selectT3 AND T4-->

      @foreach($select as $posicion => $valor)

      <div class="col-md-4 form-group {{$select[$posicion][3]}} separar">
        <label for="{{$select[$posicion][0]}}">{{$select[$posicion][1]}}</label>
            <select name="{{$select[$posicion][0]}}" id="{{$select[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach
    
    <!--ARRAY DE INPUT-TEXT arrayt4 PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => T4-->
    <!--ARRAY OF INPUT-TEXT arrayt4 BELONGING TO CONTROLADORT3, TABLE RELATED IN THE BD => T4-->

      @foreach($arrayt4 as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$arrayt4[$posicion][4]}} separar">
            <label for="{{$arrayt4[$posicion][0]}}">{{$arrayt4[$posicion][1]}}</label>
              <input type="text" name="{{$arrayt4[$posicion][0]}}" id="{{$arrayt4[$posicion][0]}}" class="form-control {{$arrayt4[$posicion][6]}}" placeholder="{{$arrayt4[$posicion][2]}}" maxlength="{{$arrayt4[$posicion][3]}}" onkeypress="{{$arrayt4[$posicion][5]}}">
      </div>
      @endforeach

      @foreach($select2 as $posicion => $valor)

      <div class="col-md-4 form-group separar">
        <label for="{{$select2[$posicion][0]}}">{{$select2[$posicion][1]}}</label>
            <select name="{{$select2[$posicion][0]}}" id="{{$select2[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect1 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

        <div class="row">
            <div class="col-md-12 form-group" ><br>
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
