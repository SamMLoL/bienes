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
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Sede</b> 
            
              @if($lastCod)
                  <b id="color"> {{$lastCod->codSede}}</b>
              @else
                  <center><b id="color">xxx</b></center>
              @endif
              
                </li></li>
            </div>
        </div>
    <hr>

      <form role="form" id="formValidaS4" name="formValidaS4" method="POST" action="{{url('sedes')}}">
           {{ csrf_field() }}

      <!--ARRAY DE INPUT PERTENECIENTE AL CONTROLADORS1 -->
    
      <div class="row separar">
        <div class="col-md-12">

        @foreach($codSede as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$codSede[$posicion][0]}}">{{$codSede[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$codSede[$posicion][0]}}" id="{{$codSede[$posicion][0]}}" placeholder="{{$codSede[$posicion][2]}}" maxlength="{{$codSede[$posicion][3]}}" >

          </div>

        @endforeach
       
        @foreach($selectSede as $posicion => $valor)

        <div class="col-md-4 form-group separar">
          <label for="{{$selectSede[$posicion][0]}}">{{$selectSede[$posicion][1]}}</label>
              <select name="{{$selectSede[$posicion][0]}}" id="{{$selectSede[$posicion][0]}}" class="form-control">
                  <option value="0" disabled selected>Seleccione</option>
                @foreach($lugarSedes as $traeSelect)
                 <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
                @endforeach
              </select>
        </div>

        @endforeach

        @foreach($espeSede as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$espeSede[$posicion][0]}}">{{$espeSede[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$espeSede[$posicion][0]}}" id="{{$espeSede[$posicion][0]}}" placeholder="{{$espeSede[$posicion][2]}}" maxlength="{{$espeSede[$posicion][3]}}" >

          </div>
        @endforeach

        </div>
      </div>

      <div class="row col-md-offset-1">
        <div class="col-md-12">
        @foreach($descSede as $posicion => $valor)
      
            <div class="col-md-10 form-estilo">
                <label for="{{$descSede[$posicion][0]}}">{{$descSede[$posicion][1]}}</label>
                 <textarea name="{{$descSede[$posicion][0]}}" id="{{$descSede[$posicion][0]}}" class="form-control" maxlength="{{$descSede[$posicion][2]}}" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
            </div>
        
        @endforeach
        </div>
      </div>

      <div class="row separar">
        <div class="col-md-12">
        @foreach($localizacion as $posicion => $valor)

        <div class="col-md-4 form-group separar">
          <label for="{{$localizacion[$posicion][0]}}">{{$localizacion[$posicion][1]}}</label>
              <select name="{{$localizacion[$posicion][0]}}" id="{{$localizacion[$posicion][0]}}" class="form-control">
                  <option value="0" disabled selected>Seleccione</option>
                @foreach($selectLoca as $traeSelect)
                 <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
                @endforeach
              </select>
        </div>

        @endforeach
        
        @foreach($codPais as $posicion => $valor)

        <div class="col-md-4 form-group separar">
          <label for="{{$codPais[$posicion][0]}}">{{$codPais[$posicion][1]}}</label>
              <select name="{{$codPais[$posicion][0]}}" id="{{$codPais[$posicion][0]}}" class="form-control">
                  <option value="0" disabled selected>Seleccione</option>
                @foreach($selectPais as $traeSelect)
                 <option value="{{$traeSelect->id}}">{{$traeSelect->pais}}</option> 
                @endforeach
              </select>
        </div>

        @endforeach

        @foreach($espePais as $posicion => $valor)
        
            <div class="col-md-4 form-group separar">
                  <label for="{{$espePais[$posicion][0]}}">{{$espePais[$posicion][1]}}</label>
                    <input type="text" name="{{$espePais[$posicion][0]}}" id="{{$espePais[$posicion][0]}}" class="form-control" placeholder="{{$espePais[$posicion][2]}}" maxlength="{{$espePais[$posicion][3]}}">
            </div>
        @endforeach
       
        </div>
      </div>

      <div class="row separar">
        <div class="col-md-12">
          @foreach($codParroquia as $posicion => $valor)

            <div class="col-md-4 form-group separar">
              <label for="{{$codParroquia[$posicion][0]}}">{{$codParroquia[$posicion][1]}}</label>
                  <select name="{{$codParroquia[$posicion][0]}}" id="{{$codParroquia[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>
                    @foreach($selectParroquia as $traeSelect)
                     <option value="{{$traeSelect->id}}">{{$traeSelect->parroquia}}</option> 
                    @endforeach
                  </select>
            </div>
          @endforeach

          @foreach($codCiudad as $posicion => $valor)

            <div class="col-md-4 form-group separar">
              <label for="{{$codCiudad[$posicion][0]}}">{{$codCiudad[$posicion][1]}}</label>
                  <select name="{{$codCiudad[$posicion][0]}}" id="{{$codCiudad[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>
                    @foreach($selectCiudad as $traeSelect)
                     <option value="{{$traeSelect->id}}">{{$traeSelect->ciudad}}</option> 
                    @endforeach
                  </select>
            </div>
          @endforeach

          @foreach($espeCiudad as $posicion => $valor)
        
            <div class="col-md-4 form-group separar">
                  <label for="{{$espeCiudad[$posicion][0]}}">{{$espeCiudad[$posicion][1]}}</label>
                    <input type="text" name="{{$espeCiudad[$posicion][0]}}" id="{{$espeCiudad[$posicion][0]}}" class="form-control" placeholder="{{$espeCiudad[$posicion][2]}}" maxlength="{{$espeCiudad[$posicion][3]}}">
            </div>
          @endforeach

        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
           @foreach($urbanizacion as $posicion => $valor)
        
            <div class="col-md-4 form-group separar">
                  <label for="{{$urbanizacion[$posicion][0]}}">{{$urbanizacion[$posicion][1]}}</label>
                    <input type="text" name="{{$urbanizacion[$posicion][0]}}" id="{{$urbanizacion[$posicion][0]}}" class="form-control" placeholder="{{$urbanizacion[$posicion][2]}}" maxlength="{{$urbanizacion[$posicion][3]}}">
            </div>
          @endforeach

          @foreach($calleAvenida as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$calleAvenida[$posicion][0]}}">{{$calleAvenida[$posicion][1]}}</label>
                  <input type="text" name="{{$calleAvenida[$posicion][0]}}" id="{{$calleAvenida[$posicion][0]}}" class="form-control" placeholder="{{$calleAvenida[$posicion][2]}}" maxlength="{{$calleAvenida[$posicion][3]}}">
          </div>
         @endforeach  

         @foreach($casaEdificio as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$casaEdificio[$posicion][0]}}">{{$casaEdificio[$posicion][1]}}</label>
                  <input type="text" name="{{$casaEdificio[$posicion][0]}}" id="{{$casaEdificio[$posicion][0]}}" class="form-control" placeholder="{{$casaEdificio[$posicion][2]}}" maxlength="{{$casaEdificio[$posicion][3]}}">
          </div>
         @endforeach

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          @foreach($piso as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$piso[$posicion][0]}}">{{$piso[$posicion][1]}}</label>
                  <input type="text" name="{{$piso[$posicion][0]}}" id="{{$piso[$posicion][0]}}" class="form-control" placeholder="{{$piso[$posicion][2]}}" maxlength="{{$piso[$posicion][3]}}">
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
