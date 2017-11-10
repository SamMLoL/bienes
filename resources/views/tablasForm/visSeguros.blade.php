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

    <div class="row"> 
      <div class="col-md-12 li separar moverIzq">
          <ul class="js-errors li"></ul>
      </div>
    </div>
   
<div class="row">
   <div class="col-md-12">
   	  <form role="form" id="formValidaT3" name="formValidaT3" method="POST" action="{{url('seguros')}}">
    	{{ csrf_field() }}

    <!--ARRAY SELECT select PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => mig_selectT3 Y T3-->
    <!--ARRAY SELECT select BELONGING TO CONTROLADORT3, TABLE RELATED IN THE BD => mig_selectT3 AND T3-->

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
    
    <!--ARRAY DE INPUT-TEXT arrayT3 PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => T3-->
    <!--ARRAY OF INPUT-TEXT arrayT3 BELONGING TO CONTROLADORT3, TABLE RELATED IN THE BD => T3-->

      @foreach($arrayT3 as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$arrayT3[$posicion][4]}} separar">
            <label for="{{$arrayT3[$posicion][0]}}">{{$arrayT3[$posicion][1]}}</label>
              <input type="text" name="{{$arrayT3[$posicion][0]}}" id="{{$arrayT3[$posicion][0]}}" class="form-control {{$arrayT3[$posicion][5]}}" placeholder="{{$arrayT3[$posicion][2]}}" maxlength="{{$arrayT3[$posicion][3]}}">
          </div>
      @endforeach

    <!--ARRAY SELECT select1 PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => mig_selectT31 Y T3-->
    <!--ARRAY SELECT select1 BELONGING TO CONTROLADORT3, TABLE RELATED IN THE BD => mig_selectT31 AND T3-->  

      @foreach($select1 as $posicion => $valor)

      <div class="col-md-4 {{$select1[$posicion][2]}} form-group  separar">
        <label for="{{$select1[$posicion][0]}}">{{$select1[$posicion][1]}}</label>
            <select name="{{$select1[$posicion][0]}}" id="{{$select1[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect1 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach
    
    <!--ARRAY SELECT select2 PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => mig_selectT32 Y T3-->
    <!--ARRAY SELECT select2 BELONGING TO CONTROLADORT3, TABLE RELATED IN THE BD => mig_selectT32 AND T3-->  

      @foreach($select2 as $posicion => $valor)

      <div class="col-md-4 {{$select2[$posicion][2]}} form-group  separar">
        <label for="{{$select2[$posicion][0]}}">{{$select2[$posicion][1]}}</label>
            <select name="{{$select2[$posicion][0]}}" id="{{$select2[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect2 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

    <!--ARRAY DE FECHA datet1 PERTENECIENTE AL CONTROLADORT1, TABLA RELACIONADA EN LA BD => T1--> 
    <!--ARRAY OF DATE datet1 BELONGING TO CONTROLADORT1, TABLE RELATED IN THE BD => T1-->

      @foreach($datet1 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$datet1[$posicion][0]}}">{{$datet1[$posicion][1]}}</label>  
                <div class="{{$datet1[$posicion][3]}}">

                <span class="{{$datet1[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$datet1[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$datet1[$posicion][0]}}" id="{{$datet1[$posicion][0]}}" placeholder="{{$datet1[$posicion][2]}}" aria-describedby="{{$datet1[$posicion][5]}}">
                          
                </div>
         </div>
      @endforeach

    <!--ARRAY DE FECHA datet2 PERTENECIENTE AL CONTROLADORT3, TABLA RELACIONADA EN LA BD => T3--> 
    <!--ARRAY OF DATE datet2 BELONGING TO CONTROLADORT3, TABLE RELATED IN THE BD => T3-->

      @foreach($datet2 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$datet2[$posicion][0]}}">{{$datet2[$posicion][1]}}</label>  
                <div class="{{$datet2[$posicion][3]}}">

                <span class="{{$datet2[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$datet2[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$datet2[$posicion][0]}}" id="{{$datet2[$posicion][0]}}" placeholder="{{$datet2[$posicion][2]}}" aria-describedby="{{$datet2[$posicion][5]}}">
                          
                </div>
         </div>

      @endforeach

      @foreach($select3 as $posicion => $valor)

      <div class="col-md-4 form-group separar">
        <label for="{{$select3[$posicion][0]}}">{{$select3[$posicion][1]}}</label>
            <select name="{{$select3[$posicion][0]}}" id="{{$select3[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect3 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

      @foreach($select4 as $posicion => $valor)

      <div class="col-md-4 form-group separar">
        <label for="{{$select4[$posicion][0]}}">{{$select4[$posicion][1]}}</label>
            <select name="{{$select4[$posicion][0]}}" id="{{$select4[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect4 as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
      </div>

      @endforeach

      @foreach($arrayT31 as $posicion => $valor)
      
      <div class="col-md-4 form-group {{$arrayT31[$posicion][4]}} separar">
            <label for="{{$arrayT31[$posicion][0]}}">{{$arrayT31[$posicion][1]}}</label>
              <input type="text" name="{{$arrayT31[$posicion][0]}}" id="{{$arrayT31[$posicion][0]}}" class="form-control"  placeholder="{{$arrayT31[$posicion][2]}}" maxlength="{{$arrayT31[$posicion][3]}}">
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
