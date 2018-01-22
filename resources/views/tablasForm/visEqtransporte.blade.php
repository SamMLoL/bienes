@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> EQUIPO DE TRANSPORTE / DATOS DE LOS BIENES MUEBLES DEL ÓRGANO O ENTE</b></h5></div>
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
      
      <div class="row separar">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Origen</b> <b id="espaciar">  
            
              @if($lastCod)
                  <b id="espaciar3"> {{$lastCod->codBien}}</b>
              @else
                  <b id="espaciar3">E2012000</b>
              @endif
              
                </b>
            </div>
        </div> 

      <div class="row"> 
          <div class="col-md-12 li moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
<hr>
   
   	<form role="form" id="formValidaT9" name="formValidaT9" method="POST" action="{{url('transporte')}}">
    	{{ csrf_field() }}

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li><b>Código del Origen:</b></li>
                <input type="text" class="form-control" name="codBien" id="codBien" placeholder="Introduzca el código de origen del bien" maxlength="12">
            </div>

            <div class="col-md-4 form-group">
              <li>Código según el catalogo:</li>
                <input type="text" class="form-control" name="codCata" id="codCata" placeholder="Introduzca el código según el catalogo" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
              <li>Dependencia Administrativa:</li>
                <select name="depAdmRes" id="depAdmRes" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($dependecia as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
               <li>Sede del Órgano o Ente Donde se Encuentra el Bien:</li>
                  <input type="text" id="sedeOrgano" name="sedeOrgano" class="form-control" placeholder="Introduzca la sede del organo del bien" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
               <li>Código del Responsable Administrativo:</li>
                  <input type="text" id="codRespAdm" name="codRespAdm" class="form-control" placeholder="Introduzca el código del responsable del bien" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
              <li>Código del Responsable del uso directo del Bien:</li>
                  <input type="text" id="codResBien" name="codResBien" class="form-control" placeholder="Introduzca el código del responsable administrativo" maxlength="10">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Código interno del Bien:</li>
                  <input type="text" id="codInterno" name="codInterno" class="form-control" placeholder="Introduzca el código interno del bien" maxlength="20">
            </div>

            <div class="col-md-4 form-group">
                <li>Estatus del uso del Bien</li>
                  <select name="estatuBien" id="estatuBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                        @foreach($estatusBien as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                        @endforeach
                  </select>
            </div>

            <div class="col-md-4 form-group">
                <li>Especifique el otro uso:</li>
                  <input type="text" id="espOtro" name="espOtro" class="form-control" placeholder="Especifique otro uso del bien" maxlength="100" disabled>
            </div>
        </div>
    </div>

<hr>
<hr>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Valor de Adquisición del Bien:</li>
                  <input type="text" id="valorAdq" name="valorAdq" class="form-control money" placeholder="Introduzca el valor del bien" maxlength="26">
            </div>

            <div class="col-md-4 form-group">
                <li><b>Moneda:</b></li>
                  <select name="moneda" id="moneda" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($moneda as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>
              
            <div class="col-md-4 form-group">
                <li>Especifique la Otra Moneda:</li>
                  <input type="text" id="espeMoneda" name="espeMoneda" class="form-control" placeholder="Especifique la otra moneda" maxlength="26">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Fecha de Adquisición del Bien:</li>
                <div class="input-group">
                <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
                <input type="text" id="feAdqBien" name="feAdqBien" class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
                </div>
            </div>

            <div class="col-md-5 form-group">
              <li>Fecha de Ingreso del Bien:</li>
              <div class="input-group">
              <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
              <input type="text" id="feIngBien" name="feIngBien" class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
              </div>
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
                <li><b>Estado del Bien:</b></li>
                  <select name="edoBien" id="edoBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($condicion as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Especifique el Otro Estado del Bien:</li>
                  <input type="text" id="espOtroEdo" name="espOtroEdo" class="form-control" placeholder="Especifique el otro estado del bien" maxlength="30">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Descripción del Estado del Bien:</li>
                 <textarea name="descEdoBien" id="descEdoBien" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
            </div>
        </div>
    </div>

    
<hr> 
<hr> 
    
    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
                <li><b>Clase del Bien:</b></li>
                  <select name="claseBien" id="claseBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($claseBien as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Especifique la otra clase:</li>
                  <input type="text" id="espeClase" name="espeClase" class="form-control" placeholder="Especifique la otra clase del bien" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li><b>Código de la Marca del Bien:</b></li>
                  <select name="codMarca" id="codMarca" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($marcas as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->codMarca}}</option> 
                      @endforeach
                  </select>
            </div>

            <div class="col-md-4 form-group">
                  <li><b>Código Modelo del Bien:</b></li>
                    <select name="codModel" id="codModel" class="form-control" disabled>
                        <option value="0" >Seleccione</option>
                          @foreach($modelos as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->codModel}}</option> 
                          @endforeach
                    </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Año de Fabricación del Bien:</li>
                  <input type="text" id="anoFabriBien" name="anoFabriBien" class="form-control" placeholder="Introduzca el año de fabricación del bien" maxlength="4">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">

            <div class="col-md-4 form-group">
              <li>Serial de Carrocería del Bien:</li>
                  <input type="text" id="serialCarro" name="serialCarro" class="form-control" placeholder="Introduzca el serial de la carrocería del bien" maxlength="50">
            </div>

            <div class="col-md-4 form-group">
              <li>Serial del Motor del Bien:</li>
                  <input type="text" id="serialMotor" name="serialMotor" class="form-control" placeholder="Introduzca el serial de la carrocería del bien" maxlength="50">
            </div>

            <div class="col-md-4 form-group">
                  <li>Placas / Siglas del Bien:</li>
                      <input type="text" id="placaBien" name="placaBien" class="form-control" placeholder="Introduzca el serial de placas del bien" maxlength="20">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                  <li>Número del Título de Propiedad:</li>
                      <input type="text" id="numTituPro" name="numTituPro" class="form-control" placeholder="Introduzca el número del titulo de propiedad" maxlength="30">
            </div>

            <div class="col-md-4 form-group">
                <li>Código del Color del Bien:</li>
                    <select name="codColorBien" id="codColorBien" class="form-control " >
                      <option value="0" disabled selected>Seleccione</option>
                        @foreach($colorBien as $traeDir)
                      <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                        @endforeach
                  </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Especificación de Otro Color:</li>
                  <input type="text" id="espeColor" name="espeColor" class="form-control" placeholder="Especifique el color" maxlength="50">
            </div>
        </div>
    </div>
    
    <div class="row col-md-offset-1 separar">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Otras Especificación de Color:</li>
                 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
            </div>
        </div>
    </div>
<hr>
<hr>
    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li>Capacidad del Bien:</li>
                  <input type="text" id="capacidadBien" name="capacidadBien" class="form-control" placeholder="Introduzca la capacidad del bien" maxlength="50">
            </div>

            <div class="col-md-4 form-group">
              <li>Nombre Dado al Bien:</li>
                  <input type="text" id="nomDadoBien" name="nomDadoBien" class="form-control" placeholder="Introduzca el nombre dado del bien" maxlength="100">
            </div>

            <div class="col-md-4 form-group">
              <li>Uso del Bien:</li>
                  <input type="text" id="usoBien" name="usoBien" class="form-control" placeholder="Introduzca el uso del bien" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-6 form-estilo">
                <li>Especificaciones Técnicas del Bien:</li>
                 <textarea name="espeTecBien" id="espeTecBien" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi1">0/255</div> </div>
            </div>
           
            <div class="col-md-6 form-estilo">
                <li>Otras Especificaciones de Descripción del Bien:</li>
                 <textarea name="otraEspeBien" id="otraEspeBien" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi2">0/255</div> </div>
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Garantía:</li>
                  <input type="text" id="garantia" name="garantia" class="form-control" placeholder="Introduzca la garantía del bien" maxlength="20">
            </div>

            <div class="col-md-5 form-group">
              <li><b>Unidad de Medida de la Garantía:</b></li>
                <select name="unidadMedi" id="unidadMedi" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($unidadGarantia as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>
        </div>
    </div>
<hr>
    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li>Fecha Inicio de la garantía:</li>
              <div class="input-group">
              <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
              <input type="text" id="feIniGarantia" name="feIniGarantia"  class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
              </div>
            </div>

            <div class="col-md-4 form-group">
              <li>Fecha Fin de la garantía:</li>
              <div class="input-group">
              <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
              <input type="text" id="feFinGarantia" name="feFinGarantia"  class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
              </div>
            </div>
            
            <div class="col-md-4 form-group">
              <li><b>Tiene sistema de rastreo y localización instalado:</b></li>
                <select name="tieneSistema" id="tieneSistema" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($poseeComponente as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row col-md-offset-1 separar">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Especificaciones sistema de rastreo instalado:</li>
                 <textarea name="espeSistema" id="espeSistema" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi3">0/255</div> </div>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li><b>Posee componentes:</b></li>
                <select name="poseeCompo" id="poseeCompo" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($poseeComponente as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li><b>Se encuentra asegurado el Bien:</b></li>
                <select name="seguroBien" id="seguroBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($poseeComponente as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Código del Registro de Seguro:</li>
                  <input type="text" id="codRegSeguro" name="codRegSeguro" class="form-control" placeholder="Introduzca el código del registro de seguro" maxlength="20">
            </div>
        </div>
    </div>

    <div class="row">
          <div class="col-md-12 form-group"><br>
              <center>
                <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                             
                  <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <b>Salir</b></a>  
               </center> 
          </div>
    </div>
</form>
</div>
</div>



@endsection