@extends('layouts.app')

@section('content')

<!--MODIFICAR LOS ROW Y LOS COLD DE LAS VISTAS TABLAS , REGISTRO, MUESTRA Y MODIFICAR ALL-->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> DATOS DE LAS SEDES / DATOS DE LAS SEDES Y SIMILARES DEL ORGANO O ENTE .</b></h5></div>
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
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><center><b>Ultimo Registro</b></center>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><center><b> Código de Unidad</b></center>
            
              @if($lastCod)
                @if($lastCod->codUnidad == '0')
                <center><b id="color"> xxx </b></center>
                @else
                <center><b id="color"> {{$lastCod->codUnidad}}</center></b>
                @endif
              @else
                <center><b id="color">Sin unidad</b></center>
              @endif
              
                </li></li>
            </div>
        </div>
    <hr>

      <form role="form" id="formValidaS5" name="formValidaS5" method="POST" action="{{url('unidades')}}">
           {{ csrf_field() }}

      <!--ARRAY DE INPUT PERTENECIENTE AL CONTROLADORS1 -->
    
<div class="row separar40">
    <div class="col-md-12">
        @foreach($coUnidad as $posicion => $valor)
             
          <div class="col-md-4  col-md-offset-4 form-group separar40">
            
             <label for="{{$coUnidad[$posicion][0]}}">{{$coUnidad[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$coUnidad[$posicion][0]}}" id="{{$coUnidad[$posicion][0]}}" placeholder="{{$coUnidad[$posicion][4]}}" maxlength="{{$coUnidad[$posicion][3]}}" >

          </div>

         @endforeach
       
        @foreach($desUnidad as $posicion => $valor)
             
          <div class="col-md-10 col-md-offset-1 form-estilo">
            
             <label for="{{$desUnidad[$posicion][0]}}">{{$desUnidad[$posicion][1]}}</label>
          
             <textarea name="{{$desUnidad[$posicion][0]}}" id="{{$desUnidad[$posicion][0]}}" class="form-control" placeholder="{{$desUnidad[$posicion][3]}}" maxlength="{{$desUnidad[$posicion][3]}}" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="basicos">0/255</div> </div>

          </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="col-md-4 form-group separar">
          <label for="{{$sel_categoria[$posicion][0]}}">{{$sel_categoria[$posicion][1]}}</label>
              <select name="{{$sel_categoria[$posicion][0]}}" id="{{$sel_categoria[$posicion][0]}}" class="form-control">
                  <option value="0" disabled selected>Seleccione</option>
                @foreach($infoSelect as $traeSelect)
                 <option value="{{$traeSelect->id}}">{{$traeSelect->categoria}}</option> 
                @endforeach
              </select>
        </div>

        @foreach($espeCategoria as $posicion => $valor)
             
          <div class="col-md-4 form-group separar40">
            
             <label for="{{$espeCategoria[$posicion][0]}}">{{$espeCategoria[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$espeCategoria[$posicion][0]}}" id="{{$espeCategoria[$posicion][0]}}" placeholder="{{$espeCategoria[$posicion][3]}}" maxlength="{{$espeCategoria[$posicion][3]}}" >

          </div>

         @endforeach

         @foreach($uniAdscrita as $posicion => $valor)
             
          <div class="col-md-4 form-group separar40">
            
             <label for="{{$uniAdscrita[$posicion][0]}}">{{$uniAdscrita[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$uniAdscrita[$posicion][0]}}" id="{{$uniAdscrita[$posicion][0]}}" placeholder="{{$uniAdscrita[$posicion][3]}}" maxlength="{{$uniAdscrita[$posicion][3]}}" >

          </div>

         @endforeach

    </div>
</div>
       
            <div class="row text-center">
                <div class="col-md-12 form-group"><br>
                           
                  <center><button type="submit" class="btn btn-md btn-success" name="#" title="Guardar Registro"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                          
                  <a href="{{url('home')}}" class="btn btn-md btn-danger" title="Salir" > <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <b>Salir</b></a></center>  

                </div>
            </div>
      </form>
   </div>
</div>


@endsection
