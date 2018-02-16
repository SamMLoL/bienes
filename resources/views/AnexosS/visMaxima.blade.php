@extends('layouts.app')

@section('content')

<!--MODIFICAR LOS ROW Y LOS COLD DE LAS VISTAS TABLAS , REGISTRO, MUESTRA Y MODIFICAR ALL-->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> MÁXIMA AUTORIDAD / DATOS DE LA MÁXIMA AUTORIDAD DEL ORGAO O ENTE .</b></h5></div>
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
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar1"> <center>Cédula</center></b>
              @if($lastCod)
                @if($lastCod->cedula == '1')
                <center><b id="color"> xxx </b></center>
                @else
                <center><b id="color"> {{$lastCod->cedula}}</center></b>
                @endif
              @else
                <center><b id="color">00.000.000</b></center>
              @endif
              </li></li>
            </div>
        </div>
    <hr>

      <form role="form" id="formValidaS2" name="formValidaS2" method="POST" action="{{url('maxima')}}">
           {{ csrf_field() }}

      <!--ARRAY DE INPUT PERTENECIENTE AL CONTROLADORS1 -->
    
      <div class="row separar">
        <div class="col-md-12">

        @foreach($cedula as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$cedula[$posicion][0]}}">{{$cedula[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$cedula[$posicion][0]}}" id="{{$cedula[$posicion][0]}}" placeholder="{{$cedula[$posicion][2]}}" maxlength="{{$cedula[$posicion][3]}}" >

          </div>
        @endforeach

        @foreach($nombre as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$nombre[$posicion][0]}}">{{$nombre[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$nombre[$posicion][0]}}" id="{{$nombre[$posicion][0]}}" placeholder="{{$nombre[$posicion][2]}}" maxlength="{{$nombre[$posicion][3]}}" >

          </div>
        @endforeach

        @foreach($apellido as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$apellido[$posicion][0]}}">{{$apellido[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$apellido[$posicion][0]}}" id="{{$apellido[$posicion][0]}}" placeholder="{{$apellido[$posicion][2]}}" maxlength="{{$apellido[$posicion][3]}}" >

          </div>
        @endforeach

        </div>
      </div>


      <div class="row separar">
        <div class="col-md-12">
        @foreach($telefono as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$telefono[$posicion][0]}}">{{$telefono[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$telefono[$posicion][0]}}" id="{{$telefono[$posicion][0]}}" placeholder="{{$telefono[$posicion][2]}}" maxlength="{{$telefono[$posicion][3]}}" onkeypress="{{$telefono[$posicion][4]}}">

          </div>
        @endforeach

        @foreach($cargo as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$cargo[$posicion][0]}}">{{$cargo[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$cargo[$posicion][0]}}" id="{{$cargo[$posicion][0]}}" placeholder="{{$cargo[$posicion][2]}}" maxlength="{{$cargo[$posicion][3]}}">

          </div>
        @endforeach

        @foreach($correo as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$correo[$posicion][0]}}">{{$correo[$posicion][1]}}</label>
                  <input type="text" name="{{$correo[$posicion][0]}}" id="{{$correo[$posicion][0]}}" class="form-control" placeholder="{{$correo[$posicion][2]}}" maxlength="{{$correo[$posicion][3]}}">
          </div>
        @endforeach
        </div>
      </div>

      <div class="row separar">
        <div class="col-md-12">
        @foreach($fechaGaceta as $posicion => $valor)
          <div class="col-md-4 form-group">
            <label for="{{$fechaGaceta[$posicion][0]}}">{{$fechaGaceta[$posicion][1]}}</label>  
                <div class="{{$fechaGaceta[$posicion][3]}}">

                <span class="{{$fechaGaceta[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$fechaGaceta[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$fechaGaceta[$posicion][0]}}" id="{{$fechaGaceta[$posicion][0]}}" placeholder="{{$fechaGaceta[$posicion][2]}}" aria-describedby="{{$fechaGaceta[$posicion][5]}}">
                          
                </div>
         </div>
         @endforeach

         @foreach($numeroGaceta as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$numeroGaceta[$posicion][0]}}">{{$numeroGaceta[$posicion][1]}}</label>
                  <input type="text" name="{{$numeroGaceta[$posicion][0]}}" id="{{$numeroGaceta[$posicion][0]}}" class="form-control" placeholder="{{$numeroGaceta[$posicion][2]}}" maxlength="{{$numeroGaceta[$posicion][3]}}">
          </div>
        @endforeach

        @foreach($numeroDecreto as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$numeroDecreto[$posicion][0]}}">{{$numeroDecreto[$posicion][1]}}</label>
                  <input type="text" name="{{$numeroDecreto[$posicion][0]}}" id="{{$numeroDecreto[$posicion][0]}}" class="form-control" placeholder="{{$numeroDecreto[$posicion][2]}}" maxlength="{{$numeroDecreto[$posicion][3]}}">
          </div>
        @endforeach
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
              @foreach($fechaDecreto as $posicion => $valor)
            <div class="col-md-4 form-group">
              <label for="{{$fechaDecreto[$posicion][0]}}">{{$fechaDecreto[$posicion][1]}}</label>  
                <div class="{{$fechaDecreto[$posicion][3]}}">

                <span class="{{$fechaDecreto[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$fechaDecreto[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$fechaDecreto[$posicion][0]}}" id="{{$fechaDecreto[$posicion][0]}}" placeholder="{{$fechaDecreto[$posicion][2]}}" aria-describedby="{{$fechaDecreto[$posicion][5]}}">
                          
                </div>
            </div>
         @endforeach
        </div>
      </div>
    

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
