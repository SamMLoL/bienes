
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Inmuebles</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>


<div class="container" id="sha">
    <div class="col-md-12">
        <div class="row">
            <div class="panel">
                    <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
              <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DATOS DE LOS BIENES INMUEBLES DEL ÓRGANO O ENTE</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
            </div>   
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
            </div>
        </div>
<hr>
        
          <div class="row separar40">
              <div class="col-md-12 form-group">
                 	@if($seleccion->codBien == '1')
                  <div class="col-md-4">
                      <label>Código del Origen del Bien</label>
                          <br>xxx
                  </div>
                  @else
                  <div class="col-md-4">
                      <label>Código del Origen del Bien</label>
                          <br>{{$seleccion->codBien}}
                  </div>    
                  @endif
                  
                  @if($seleccion->codCata == '1')
                  <div class="col-md-4">
                      <label>Código según el catalogo</label>
                          <br>xxx
                  </div>
                  @else
                  <div class="col-md-4">
                      <label>Código según el catalogo</label>
                          <br>{{$seleccion->codCata}}
                  </div>    
                  @endif

              	  <div class="col-md-4">
                 	    <label>Dependencia Administrativa</label>
                     	    <br>{{$seleccion->depAdmRes}}
                  </div>
              </div>
          </div>
      
          <div class="row separar40">
              <div class="col-md-12 form-group">
                  
                  @if($seleccion->codRespAdm == '1')
                  <div class="col-md-4">
                      <label>Código del Responsable Administrativo</label>
                        <br>xxx
                  </div> 
                  @else 
                  <div class="col-md-4">
                      <label>Código del Responsable Administrativo</label>
                          <br>{{$seleccion->codRespAdm}}
                  </div> 
                  @endif

                  <div class="col-md-4">
                      <label>Bien Inmueble Corresponde a Alguna Sede del Ente</label>
                          <br>{{$seleccion->corresBien}}
                  </div>
              

                  @if($seleccion->codResBien == '1')
                  <div class="col-md-4">
                        <label>Código de Sede del Ente donde Corresponde el Bien</label>
                            <br>xxx
                  </div>
                  @else
                    <div class="col-md-4">
                        <label>Código de Sede del Ente donde Corresponde el Bien</label>
                            <br>{{$seleccion->codSede}}
                  </div>
                  @endif
              </div>
          </div>
       
          <div class="row separar">
              <div class="col-md-12 form-group">
                    <div class="col-md-4">
                      <label>Localización</label>
                          <br>{{$seleccion->localizacion}}
                    </div>

                    <div class="col-md-4">
                      <label>Código del País donde se Ubica la Sede</label>
                          <br>{{$seleccion->codPais}}
                    </div>

                    @if($seleccion->espeOtroPais == '1')
                    <div class="col-md-4">
                        <label>Especifique el Otro País</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Especifique el Otro País</label>
                            <br>{{$seleccion->espeOtroPais}}
                    </div>
                    @endif
              </div>
          </div>
        <hr> 
        <hr>     
          <div class="row separar40">
              <div class="col-md-12 form">
                    <div class="col-md-4">
                      <label>Código de la Parroquia donde se Ubica el Inmueble</label>
                          <br>{{$seleccion->codParroquia}}
                    </div>
                    
                    <div class="col-md-4">
                      <label>Código de la Ciudad donde se Ubica el Bien</label>
                          <br>{{$seleccion->codCiudad}}
                    </div>
                  
                    @if($seleccion->espeOtroCiudad == '1')
                    <div class="col-md-4">
                        <label>Especifique la Otra Ciudad</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Especifique la Otra Ciudad</label>
                            <br>{{$seleccion->espeOtroCiudad}}
                    </div>
                    @endif
              </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12 form">
                    @if($seleccion->urbanizacion == '1')
                    <div class="col-md-4">
                        <label>Urbanización</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Urbanización</label>
                            <br>{{$seleccion->urbanizacion}}
                    </div>
                    @endif 

                    @if($seleccion->calleAvenida == '1')
                    <div class="col-md-4">
                        <label>Calle / Avenida</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Calle / Avenida</label>
                            <br>{{$seleccion->calleAvenida}}
                    </div>
                    @endif

                    @if($seleccion->casaEdificio == '1')
                    <div class="col-md-4">
                        <label>Casa / Edificio</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Casa / Edificio</label>
                            <br>{{$seleccion->casaEdificio}}
                    </div>
                    @endif
                  
                </div>
            </div>
        
          <div class="row separar">
              <div class="col-md-12 form">
                    @if($seleccion->codInterno == '1')
                    <div class="col-md-4">
                        <label>Código Interno del Bien</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Código Interno del Bien</label>
                            <br>{{$seleccion->codInterno}}
                    </div>
                    @endif

                    <div class="col-md-4">
                        <label>Estatus del uso del Bien</label>
                            <br>{{$seleccion->estatuBien}}
                    </div>

                    @if($seleccion->espOtroUso == '1')
                    <div class="col-md-4">
                        <label>Especifique el Otro Uso</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4">
                        <label>Especifique el Otro Uso</label>
                            <br>{{$seleccion->espOtroUso}}
                    </div>
                    @endif
              </div>
          </div>
        <hr>
        <hr> 
          <div class="row separar40">
            <div class="col-md-12 ">
              
              @if($seleccion->valorAdq == '0')
              <div class="col-md-4">
                  <label>Valor de Adquisición del Bien</label>
                         <br>99
              </div>
              @else
              <div class="col-md-4">
                  <label>Valor de Adquisición del Bien</label>
                         <br>{{$seleccion->valorAdq}}
              </div>
              @endif

              <div class="col-md-4">
                  <label>Moneda</label>
                         <br>{{$seleccion->selectMonedainmu->opcion}}
              </div>

              @if($seleccion->espeMoneda == '1')
              <div class="col-md-4">
                  <label>Especifique la Otra Moneda</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4">
                  <label>Especifique la Otra Moneda</label>
                         <br>{{$seleccion->espeMoneda}}
              </div>
              @endif
            </div>
          </div>
  
          <div class="row separar40">
            <div class="col-md-12 ">
              @if($seleccion->feAdqBien == '1111-11-11')
              <div class="col-md-4">
                  <label>Fecha de Adquisición del Bien</label>
                         <br>11111111
              </div>
              @else
              <div class="col-md-4">
                  <label>Fecha de Adquisición del Bien</label>
                         <br>{{$seleccion->feAdqBien}}
              </div>
              @endif

              @if($seleccion->feIngBien == '1111-11-11')
              <div class="col-md-4">
                  <label>Fecha de Ingreso del Bien</label>
                         <br>11111111
              </div>
              @else
              <div class="col-md-4">
                  <label>Fecha de Ingreso del Bien</label>
                         <br>{{$seleccion->feIngBien}}
              </div>
              @endif

              @if($seleccion->espOtroEdo == '1')
              <div class="col-md-4">
                  <label>Especifique el Otro Estado del Bien</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4">
                  <label>Especifique el Otro Estado del Bien</label>
                         <br>{{$seleccion->espOtroEdo}}
              </div>
              @endif
            </div>
          </div>
        
          <div class="row separar40">
            <div class="col-md-12 form">
              <div class="col-md-4">
                  <label>Estado del Bien</label>
                         <br>{{$seleccion->edoBien}}
              </div>

              @if($seleccion->descEdoBien == '1')
              <div class="col-md-4">
                  <label>Especifique el Otro Estado del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Especifique el Otro Estado del Bien</label>
                         <br>{{$seleccion->descEdoBien}}
              </div>
              @endif

              <div class="col-md-4">
                  <label>Uso del Bien Inmueble</label>
                        <br>{{$seleccion->usoBienInmu}}
              </div>             
            </div>
          </div>
   
        <hr>
        <hr> 
          <div class="row separar40">
            <div class="col-md-12 form">
              @if($seleccion->otroUsoInmu == '1')
              <div class="col-md-4">
                  <label>Otro Uso</label>
                        <br>noaplica
              </div>
              @else
              <div class="col-md-4">
                  <label>Otro Uso</label>
                        <br>{{$seleccion->otroUsoInmu}}
              </div>
              @endif

              @if($seleccion->ofiRegistro == '1')
              <div class="col-md-4">
                  <label>Oficina de Registro/Notaría</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Oficina de Registro/Notaría</label>
                        <br>{{$seleccion->ofiRegistro}}
              </div>
              @endif

              @if($seleccion->refRegistro == '1')
              <div class="col-md-4">
                  <label>Referencia del Registro</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Referencia del Registro</label>
                        <br>{{$seleccion->refRegistro}}
              </div>
              @endif             
            </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12 form">
              @if($seleccion->tomo == '0')
              <div class="col-md-4">
                  <label>Tomo</label>
                        <br>99
              </div>
              @else
              <div class="col-md-4">
                  <label>Tomo</label>
                        <br>{{$seleccion->tomo}}
              </div>
              @endif

              @if($seleccion->folio == '0')
              <div class="col-md-4">
                  <label>Folio</label>
                        <br>99
              </div>
              @else
              <div class="col-md-4">
                  <label>Folio</label>
                        <br>{{$seleccion->folio}}
              </div>
              @endif

              @if($seleccion->protocolo == '0')
              <div class="col-md-4">
                  <label>Protocolo</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Protocolo</label>
                        <br>{{$seleccion->protocolo}}
              </div>
              @endif             
            </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12 form">
              @if($seleccion->numRegistro == '0')
              <div class="col-md-4">
                  <label>Número de Registro</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Número de Registro</label>
                        <br>{{$seleccion->numRegistro}}
              </div>
              @endif

              @if($seleccion->feRegistro == '1111-11-11')
              <div class="col-md-4">
                  <label>Fecha de Registro</label>
                        <br>11111111
              </div>
              @else
              <div class="col-md-4">
                  <label>Fecha de Registro</label>
                        <br>{{$seleccion->feRegistro}}
              </div>
              @endif

              @if($seleccion->propieAnt == '1')
              <div class="col-md-4">
                  <label>Propietario Anterior</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Propietario Anterior</label>
                        <br>{{$seleccion->propieAnt}}
              </div>
              @endif
            </div>
          </div>
      <hr>
      <hr>
          <div class="row separar40">
            <div class="col-md-12 form">
              @if($seleccion->depenIntegra == '1')
              <div class="col-md-4">
                  <label>Dependencias que lo Integran</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Dependencias que lo Integran</label>
                        <br>{{$seleccion->depenIntegra}}
              </div>
              @endif

              @if($seleccion->areaConstru == '0')
              <div class="col-md-4">
                  <label>Área de Construcción</label>
                        <br>99
              </div>
              @else
              <div class="col-md-4">
                  <label>Área de Construcción</label>
                        <br>{{$seleccion->areaConstru}}
              </div>
              @endif

              <div class="col-md-4">
                  <label>Unidad de Medida del Área Construcción</label>
                        <br>{{$seleccion->unidadConstru}}
              </div>   
            </div>
          </div>
      
          <div class="row separar40">
            <div class="col-md-12 form">
              @if($seleccion->espeOtraUnidad == '1')
              <div class="col-md-4">
                  <label>Especifique la Otra Unidad de Medida</label>
                        <br>noaplica
              </div>
              @else
              <div class="col-md-4">
                  <label>Especifique la Otra Unidad de Medida</label>
                        <br>{{$seleccion->espeOtraUnidad}}
              </div>
              @endif

              @if($seleccion->areaTerreno == '0')
              <div class="col-md-4">
                  <label>Área del Terreno</label>
                        <br>99
              </div>
              @else
              <div class="col-md-4">
                  <label>Área del Terreno</label>
                        <br>{{$seleccion->areaTerreno}}
              </div>
              @endif

              <div class="col-md-4">
                  <label>Unidad de Medida del Área del Terreno</label>
                        <br>{{$seleccion->unidadTerreno}}
              </div>
            </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12 form">
              @if($seleccion->espeOtraTerre == '1')
              <div class="col-md-4">
                  <label>Especifique la Otra Unidad de Medida</label>
                        <br>noaplica
              </div>
              @else
              <div class="col-md-4">
                  <label>Especifique la Otra Unidad de Medida</label>
                        <br>{{$seleccion->espeOtraTerre}}
              </div>
              @endif

              @if($seleccion->otrasEspecifi == '1')
              <div class="col-md-4">
                  <label>Otras Especificaciones</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Otras Especificaciones</label>
                        <br>{{$seleccion->otrasEspecifi}}
              </div>
              @endif

              <div class="col-md-4">
                  <label>Se Encuentra el Bien Asegurado</label>
                        <br>{{$seleccion->seguroBien}}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form">
              @if($seleccion->codRegSeguro == '1')
              <div class="col-md-4">
                  <label>Código del Registro de Seguro</label>
                        <br>xxx
              </div>
              @else
              <div class="col-md-4">
                  <label>Código del Registro de Seguro</label>
                        <br>{{$seleccion->codRegSeguro}}
              </div>
              @endif
            </div>
          </div>
          <div class="row text-center separar">
             	<div class="col-md-12 separar form-group">
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT12" title="AnularT12"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('regInmuebles')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('datosinmuebles/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
       </div>
   </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
