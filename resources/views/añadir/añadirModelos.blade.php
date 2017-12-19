@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
           <div class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> MODELOS / DATOS DE LOS MODELOS DE LOS BIENES MUEBLES DEL ORGANO O ENTE</b></h5></div>
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

          <div class="row separar">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"> <b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar5"> Código del Proveedor</b>
              <b id="espaciar">
              @if($lastCod)
                {{$lastCod->codModel}}
              @else
                MOD000
              @endif
              </b>
            </div>
        </div>

          <div class="row"> 
              <div class="col-md-12 li separar moverIzq">
                  <ul class="js-errors li"></ul>
              </div>
          </div>

      <form role="form" id="formValidaT6" name="formValidaT6" method="POST" action="{{url('modelos')}}">
      {{ csrf_field() }}
        
      
      <!--ARRAY DE INPUT-TEXT PERTENECIENTE AL CONTROLADORT6, TABLA RELACIONADA EN LA BD => T6-->
      <!--ARRAY OF INPUT-TEXT BELONGING TO CONTROLADORT6, TABLE RELATED IN THE BD => T6-->
  
          @foreach($arrayT6 as $posicion => $valor)

              <div class="col-md-4 {{$arrayT6[$posicion][4]}} form-group separar">
          
                  <label for="{{$arrayT6[$posicion][0]}}">{{$arrayT6[$posicion][1]}}</label>
                     
                  <input type="text" class="form-control" name="{{$arrayT6[$posicion][0]}}" id="{{$arrayT6[$posicion][0]}}" placeholder="{{$arrayT6[$posicion][2]}}" maxlength="{{$arrayT6[$posicion][3]}}" >

              </div>
            
          @endforeach

        <div id="hola" name="hola">
          
           
        </div>
      

        

        

          @foreach($selectCod as $posicion => $valor)
            
             <div class="col-md-4 {{$selectCod[$posicion][4]}} form-group  separar">
                <label for="{{$selectCod[$posicion][0]}}">{{$selectCod[$posicion][1]}}</label>
                   <select name="{{$selectCod[$posicion][0]}}" id="{{$selectCod[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>

                   @foreach($infoSelect as $traeSelect)
                      <option value="{{$traeSelect->id}}">{{$traeSelect->codMarca}}</option> 
                   @endforeach
                   </select>
             </div>
          @endforeach



          @foreach($arrayBien as $posicion => $valor)

              <div class="col-md-4 {{$arrayBien[$posicion][4]}} form-group separar">
          
                  <label for="{{$arrayBien[$posicion][0]}}">{{$arrayBien[$posicion][1]}}</label>
                     
                  <input type="text" class="form-control" name="{{$arrayBien[$posicion][0]}}" id="{{$arrayBien[$posicion][0]}}" placeholder="{{$arrayBien[$posicion][2]}}" maxlength="{{$arrayBien[$posicion][3]}}" >

              </div>
            
          @endforeach
    
          <div class="row">
              <div class="col-md-12 form-group" ><br>
                  <center>
                      <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b> Enviar</b></button>
                               
                      <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <b> Salir</b></a>  
                  </center> 
              </div>
          </div>
       </form> 
    </div>  
</div>

@endsection
