@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> INMUEBLES / DATOS DE LOS BIENES INMUEBLES DEL ÓRGANO O ENTE</b></h5></div>
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
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Origen</b><b id="espaciar">  
            
              @if($lastCod)
                  <b id="espaciar3"> {{$lastCod->codBien}}</b>
              @else
                  <b id="espaciar3">I2012001</b>
              @endif
              
                </b></li></li>
            </div>
        </div> 

      <div class="row"> 
          <div class="col-md-12 li moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
<hr>
   
   	<form role="form" id="formValidaT12" name="formValidaT12" method="POST" action="{{url('datosInmuebles')}}">
    	{{ csrf_field() }}
    
    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li><b>Código del Origen del Bien:</b></li>
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
                      @foreach($dependencia as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
               <li>Código del Responsable Administrativo:</li>
                  <input type="text" id="codRespAdm" name="codRespAdm" class="form-control" placeholder="Introduzca el código del responsable del bien" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
              <li>Correspondencia del Bien Inmueble:</li>
                <select name="corresBien" id="corresBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($corresBien as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
               <li>Código de la Sede del Órgano o Ente:</li>
                  <input type="text" id="codSede" name="codSede" class="form-control" placeholder="Introduzca el código del responsable del bien" maxlength="10">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li>Localización:</li>
                <select name="localizacion" id="localizacion" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($localizacion as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Código del País donde se Ubica la Sede:</li>
                <select name="codPais" id="codPais" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($codigoPais as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
               <li>Especifique el Otro País:</li>
                  <input type="text" id="espeOtroPais" name="espeOtroPais" class="form-control" placeholder="Especifique el Otro País" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li>Código de la Parroquia donde se Ubica el Inmueble:</li>
                <select name="codParroquia" id="codParroquia" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($codigoParroquia as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Código de la Ciudad donde se Ubica el Bien:</li>
                <select name="codCiudad" id="codCiudad" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($codigoParroquia as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
               <li>Especifique la Otra Ciudad:</li>
                  <input type="text" id="espeOtroCiudad" name="espeOtroCiudad" class="form-control" placeholder="Especifique la otra ciudad" maxlength="100">
            </div>
        </div>
    </div>
<hr>
<hr>
    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
               <li>Urbanización:</li>
                  <input type="text" id="urbanizacion" name="urbanizacion" class="form-control" placeholder="Especifique la urbanización" maxlength="30">
            </div> 

            <div class="col-md-4 form-group">
               <li>Calle / Avenida:</li>
                  <input type="text" id="calleAvenida" name="calleAvenida" class="form-control" placeholder="Especifique la calle o avenida" maxlength="50">
            </div>

            <div class="col-md-4 form-group">
               <li>Casa / Edificio:</li>
                  <input type="text" id="casaEdificio" name="casaEdificio" class="form-control" placeholder="Especifique la casa o el edificio" maxlength="30">
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
                <li>Especifique el Otro Uso:</li>
                  <input type="text" id="espOtro" name="espOtro" class="form-control" placeholder="Especifique otro uso del bien" maxlength="100" disabled>
            </div>
        </div>
    </div>

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
<hr>
<hr>
    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
                <li><b>Estado del Bien:</b></li>
                  <select name="edoBien" id="edoBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($estatusBien as $traeDir)
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
    
    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Uso del Bien Inmueble:</li>
                <select name="usoBienInmu" id="usoBienInmu" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($usoInmueble as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Otro Uso:</li>
                  <input type="text" id="espOtroEdo" name="espOtroEdo" class="form-control" placeholder="Especifique el otro estado del bien" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-estilo">
                <li>Oficina de Registro/Notaria:</li>
                 <textarea name="ofiRegistro" id="ofiRegistro" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
            </div>

            <div class="col-md-5 form-estilo">
                <li>Referencia del Registro:</li>
                 <textarea name="refRegistro" id="refRegistro" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
            </div>
        </div>
    </div>
<hr>
<hr>
    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li>Tomo:</li>
                  <input type="text" id="tomo" name="tomo" class="form-control" placeholder="Introzduca el tomo" maxlength="4" onkeypress="return soloNum(event)">
            </div>

            <div class="col-md-4 form-group">
              <li>Folio:</li>
                  <input type="text" id="folio" name="folio" class="form-control" placeholder="Introzduca el folio" maxlength="5" onkeypress="return soloNum(event)">
            </div>

            <div class="col-md-4 form-group">
              <li>Protocolo:</li>
                  <input type="text" id="protocolo" name="protocolo" class="form-control" placeholder="Introzduca el protocolo" maxlength="20">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Número de Registro:</li>
                    <input type="text" id="numRegistro" name="numRegistro" class="form-control" placeholder="Introzduca el número de registro" maxlength="20">
            </div>

            <div class="col-md-4 form-group">
              <li>Fecha de Registro:</li>
              <div class="input-group">
              <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
              <input type="text" id="feRegistro" name="feRegistro"  class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
              </div>
            </div>

            <div class="col-md-4 form-group">
                <li>Propietario Anterior:</li>
                    <input type="text" id="propieAnt" name="propieAnt" class="form-control" placeholder="Introzduca el propietario anterior" maxlength="20">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Dependencias que lo Integran:</li>
                 <textarea name="depenIntegra" id="depenIntegra" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
            </div>
        </div>
    </div>
<hr>
<hr>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Área de Construcción:</li>
                    <input type="text" id="areaConstru" name="areaConstru" class="form-control money" placeholder="Indique el área de construcción" maxlength="23">
            </div>

            <div class="col-md-4 form-group">
              <li>Unidad de Medida del Área Construcción:</li>
                <select name="unidadConstru" id="unidadConstru" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($unidadConstru as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Especifique la Otra Unidad de Medida:</li>
                  <input type="text" id="espeOtraUnidad" name="espeOtraUnidad" class="form-control" placeholder="Especifique la otra unidad del área de construcción" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Área del Terreno:</li>
                    <input type="text" id="areaTerreno" name="areaTerreno" class="form-control money" placeholder="Indique el área de terreno" maxlength="23">
            </div>

            <div class="col-md-4 form-group">
              <li>Unidad de Medida del Área del Terreno:</li>
                <select name="unidadTerreno" id="unidadTerreno" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($unidadConstru as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Especifique la Otra Unidad de Medida:</li>
                  <input type="text" id="espeOtraTerre" name="espeOtraTerre" class="form-control" placeholder="Especifique la otra unidad del área del terreno" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Otras Especificaciones:</li>
                 <textarea name="otrasEspecifi" id="otrasEspecifi" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
            </div>
         </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Se Encuentra el Bien Asegurado:</li>
                <select name="seguroBien" id="seguroBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($seguroBien as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-5 separar form-group">
              <li>Código del Registro de Seguro:</li>
                  <input type="text" id="codRegSeguro" name="codRegSeguro" class="form-control" placeholder="Introduzca el código del registro del seguro" maxlength="10">
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

