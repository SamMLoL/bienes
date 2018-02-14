@extends('layouts.app')

@section('content')

<!--MODIFICAR LOS ROW Y LOS COLD DE LAS VISTAS TABLAS , REGISTRO, MUESTRA Y MODIFICAR ALL-->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> PROVEEDORES/ DATOS DE LOS PROVEEDORES DE LOS BIENES PÚBLICOS DEL ÓRGANO O ENTE .</b></h5></div>
        </div>
            
        <div class="row">
            <div class="col-md-12">
               <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
                <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO. SEGÚN EL MANUAL DE ESPECIFICACIONES TÉCNICAS.</b></h6>
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-12 li moverIzq">
                <ul class="js-errors li"></ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 desvanecer">
             @if(session()->has('msj'))
                <center><div  class="col-md-12  alert alert-success" role="alert">{{session('msj')}}</div></center>
                  @endif

                  @if(session()->has('errormsj'))
                <center><div  class="col-md-12  alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
             @endif
            </div>
        </div>

        <div class="row separar">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"> <b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar5"> Código del Proveedor</b>
              <b id="espaciar">
              @if($lastCod)
                {{$lastCod->codProvee}}
              @else
                VPRBV-P001
              @endif
              </b></li></li>
            </div>
        </div>
    <hr>

      <form role="form" id="formValidaT1" name="formValidaT1" method="POST" action="{{url('proveedores')}}">
           {{ csrf_field() }}

      <!--ARRAY DE SELECT PERTENECIENTE AL CONTROLADORT1 LA TABLA RELACIONADA EN LA BD => mig_selectT1-->
      <!--ARRAY OF SELECT BELONGING TO CONTROLADORT1 THE RELATED TABLE IN THE BD => mig_selectT1-->

      <div class="row">
        <div class="col-md-12">
         @foreach($selectt1 as $posicion => $valor)
             <div class="col-md-4 form-group {{$selectt1[$posicion][4]}}">
                <label for="{{$selectt1[$posicion][0]}}">{{$selectt1[$posicion][1]}}</label>
                   <select name="{{$selectt1[$posicion][0]}}" id="{{$selectt1[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>

                   @foreach($sel_proveedores as $select)
                      <option value="{{$select->id}}">{{$select->opcion}}</option> 
            
                   @endforeach
                   </select>
             </div>
          @endforeach

       <!--ARRAY DE INPUT-TEXT PERTENECIENTE AL CONTROLADORT1 LA TABLA RELACIONADA EN LA BD => T1-->
       <!--ARRAY OF INPUT-TEXT BELONGING TO CONTROLADORT1 THE RELATED TABLE IN THE BD => T1--> 

          @foreach($input1 as $posicion => $valor)
             
        <div class="col-md-4 form-group {{$input1[$posicion][4]}}">
          
           <label for="{{$input1[$posicion][0]}}">{{$input1[$posicion][1]}}</label>
        
           <input type="text" class="form-control" name="{{$input1[$posicion][0]}}" id="{{$input1[$posicion][0]}}" placeholder="{{$input1[$posicion][2]}}" maxlength="{{$input1[$posicion][3]}}" >

        </div> 

          @endforeach
       
          @foreach($selectt2 as $posicion => $valor)
             <div class="col-md-1 form-group ">
                <label for="{{$selectt2[$posicion][0]}}"></label>
                   <select name="{{$selectt2[$posicion][0]}}" id="{{$selectt2[$posicion][0]}}" class="form-control">
                      <option value="1" >{{$selectt2[$posicion][4]}}</option>
                      <option value="2" >{{$selectt2[$posicion][5]}}</option>
                      <option value="3" >{{$selectt2[$posicion][6]}}</option>
                   </select>
             </div>
          @endforeach
    
        @foreach($input3 as $posicion => $valor)

        <div class="col-md-3 form-group {{$input3[$posicion][4]}}">
          
           <label for="{{$input3[$posicion][0]}}">{{$input3[$posicion][1]}}</label>
        
           <input type="text" class="form-control" name="{{$input3[$posicion][0]}}" id="{{$input3[$posicion][0]}}" placeholder="{{$input3[$posicion][2]}}" maxlength="{{$input3[$posicion][3]}}" >

        </div> 
          @endforeach
     
          @foreach($input2 as $posicion => $valor)

        <div class="col-md-4 form-group {{$input2[$posicion][4]}}">
          
           <label for="{{$input2[$posicion][0]}}">{{$input2[$posicion][1]}}</label>
        
           <input type="text" class="form-control" name="{{$input2[$posicion][0]}}" id="{{$input2[$posicion][0]}}" placeholder="{{$input2[$posicion][2]}}" maxlength="{{$input2[$posicion][3]}}"  >

        </div> 
          @endforeach
      </div>
    </div>

         <!--FINAL DEL ROW | FOREACH DE LA TABLA t1dpbpoe | controladorT1-->
         <!--FINAL OF THE ROW | FOREACH OF THE TABLE t1dpbpoe | controllerT1 -->
           
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
