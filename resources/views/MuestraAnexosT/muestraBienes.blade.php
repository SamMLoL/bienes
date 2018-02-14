
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Bienes</title>
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
              <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE BIENES</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
            </div>   
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
            </div>
        </div>
<hr>
        
@include('eliminarReg.anularBienes')
          <div class="row separar40">
              <div class="col-md-12">
                 	<div class="col-md-4 form-group">
                 	    <label>Código de Origen del Bien</label>
                  	    <br>{{$seleccion->codOt2_1}}
                 	</div>
                  
                  @if($seleccion->codCata == '1')
                  <div class="col-md-4 form-group">
                      <label>Código según el catalogo</label>
                          <br>xxx
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Código según el catalogo</label>
                          <br>{{$seleccion->codCata}}
                  </div>    
                  @endif

              	  <div class="col-md-4 form-group">
                 	    <label>Dependencia Administrativa</label>
                     	    <br>{{$seleccion->selectDependencia->opcion}}
                  </div>
              </div>
          </div>
      
          <div class="row separar40">
              <div class="col-md-12">
                  <div class="col-md-4 form-group">
                  @if($seleccion->sedeOrgano == '1')
                      <label>Sede del Órgano o Ente Donde se Encuentra el Bien</label>
                          <br>xxx
                  </div>
                  @else
                   <label>Sede del Órgano o Ente Donde se Encuentra el Bien</label>
                          <br>{{$seleccion->sedeOrgano}}
                  </div>
                  @endif

                  @if($seleccion->codRespAdm == '1')
                  <div class="col-md-4 form-group">
                      <label>Código del Responsable Administrativo</label>
                        <br>xxx
                  </div> 
                  @else 
                  <div class="col-md-4 form-group">
                      <label>Código del Responsable Administrativo</label>
                          <br>{{$seleccion->codRespAdm}}
                  </div> 
                  @endif

                  @if($seleccion->codResBien == '1')
                    <div class="col-md-4 form-group">
                        <label>Código del Responsable del uso directo del Bien</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Código del Responsable del uso directo del Bien</label>
                            <br>{{$seleccion->codResBien}}
                    </div>
                   @endif
              </div>
          </div>
       
          <div class="row separar">
              <div class="col-md-12">
                   @if($seleccion->codInterno == '1')
                    <div class="col-md-4 form-group">
                        <label>Código interno del Bien</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Código interno del Bien</label>
                            <br>{{$seleccion->codInterno}}
                    </div>
                   @endif

                    <div class="col-md-4 form-group">
                      <label>Estatus del uso del Bien</label>
                          <br>{{$seleccion->estatuBien}}
                    </div>

                    @if($seleccion->espOtro == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique el otro uso</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Especifique el otro uso</label>
                            <br>{{$seleccion->espOtro}}
                    </div>
                    @endif
              </div>
          </div>
        <hr> 
        <hr>     
          <div class="row separar40">
              <div class="col-md-12">
                    @if($seleccion->valorAdq == '0')
                    <div class="col-md-4 form-group">
                        <label>Valor de Adquisición del Bien</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                      <label>Valor de Adquisición del Bien</label>
                            <br>{{$seleccion->valorAdq}}
                    </div>
                    @endif
                    
                    <div class="col-md-4 form-group">
                        <label>Moneda</label>
                            <br>{{$seleccion->moneda}}
                    </div>
                  
                    @if($seleccion->espeMoneda == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique la Otra Moneda</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                    <label>Especifique la Otra Moneda</label>
                            <br>{{$seleccion->espeMoneda}}
                    </div>
                    @endif
              </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12">
                    @if($seleccion->feAdqBien == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Adquisición del Bien</label>
                            <br>11111111
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                    <label>Fecha de Adquisición del Bien</label>
                            <br>{{$seleccion->feAdqBien}}
                    </div>
                    @endif 

                    @if($seleccion->feIngBien == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Ingreso del Bien</label>
                            <br>11111111
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Fecha de Ingreso del Bien</label>
                            <br>{{$seleccion->feIngBien}}
                    </div>
                    @endif

                  
                    <div class="col-md-4 form-group">
                        <label>Estado del Bien</label>
                            <br>{{$seleccion->edoBien}}
                    </div>
                  

                </div>
            </div>
        
          <div class="row separar">
              <div class="col-md-12">
                    @if($seleccion->espOtroEdo == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique Otro Estado del Bien</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Especifique Otro Estado del Bien</label>
                            <br>{{$seleccion->espOtroEdo}}
                    </div>
                    @endif

                    @if($seleccion->descEdoBien == '1')
                    <div class="col-md-4 form-group">
                        <label>Descripción del Estado del Bien</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Descripción del Estado del Bien</label>
                            <br>{{$seleccion->descEdoBien}}
                    </div>
                    @endif

                    @if($seleccion->serialBien == '1')
                    <div class="col-md-4 form-group">
                        <label>Serial del Bien</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Serial del Bien</label>
                            <br>{{$seleccion->serialBien}}
                    </div>
                    @endif
              </div>
          </div>
        <hr>
        <hr> 
          <div class="row separar40">
            <div class="col-md-12">
              <div class="col-md-4 form-group">
                  <label>Código de la Marca del Bien</label>
                         <br>{{$seleccion->selectMarcabien->codMarca}}
              </div>

              <div class="col-md-4 form-group">
                  <label>Código de la Marca del Bien</label>
                         <br>{{$seleccion->selectModelbien->codModel}}
              </div>
              
              @if($seleccion->anoFabriBien == '0')
              <div class="col-md-4 form-group">
                  <label>Año de Fabricación del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Año de Fabricación del Bien</label>
                         <br>{{$seleccion->anoFabriBien}}
              </div>
              @endif
            </div>
          </div>
  
          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->codColorBien == '1')
              <div class="col-md-4 form-group">
                  <label>Especificación de Color</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Especificación de Color</label>
                         <br>{{$seleccion->codColorBien}}
              </div>
              @endif
              
              @if($seleccion->espeColor == '1')
              <div class="col-md-4 form-group">
                  <label>Especificación de Color</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Especificación de Color</label>
                         <br>{{$seleccion->espeColor}}
              </div>
              @endif

              @if($seleccion->otraEspeColor == '1')
              <div class="col-md-4 form-group">
                  <label>Otras Especificación de Color</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otras Especificación de Color</label>
                         <br>{{$seleccion->otraEspeColor}}
              </div>
              @endif
            </div>
          </div>
        
          <div class="row separar">
            <div class="col-md-12">
              @if($seleccion->espeTecBien == '1')
              <div class="col-md-4 form-group">
                  <label>Especificaciones Técnicas del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Especificaciones Técnicas del Bien</label>
                         <br>{{$seleccion->espeTecBien}}
              </div>
              @endif

              @if($seleccion->otraDescBien == '1')
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones de Descripción del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones de Descripción del Bien</label>
                         <br>{{$seleccion->otraDescBien}}
              </div>
              @endif

               @if($seleccion->garantia == '1')
              <div class="col-md-4 form-group">
                  <label>Garantía</label>
                         <br>99
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Garantía</label>
                         <br>{{$seleccion->garantia}}
              </div>
              @endif
            </div>
          </div>
        <hr>
        <hr> 
          <div class="row separar40">
            <div class="col-md-12">
              
              <div class="col-md-4 form-group">
                  <label>Unidad de Medida de la Garantía</label>
                        <br>{{$seleccion->unidadMedi}}
              </div>
             

              @if($seleccion->feIniGarantia == '1111-11-11')
              <div class="col-md-4 form-group">
                  <label>Fecha Inicio de la garantía</label>
                        <br>11111111
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Fecha Inicio de la garantía</label>
                            <br>{{$seleccion->feIniGarantia}}
              </div>
              @endif

              @if($seleccion->feFinGarantia == '1111-11-11')
              <div class="col-md-4 form-group">
                  <label>Fecha Fin de la garantía</label>
                        <br>11111111
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Fecha Fin de la garantía</label>
                            <br>{{$seleccion->feFinGarantia}}
              </div>
              @endif
            </div>
          </div>
        
          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->poseeCompo == '1')
              <div class="col-md-4 form-group">
                  <label>Posee Componentes</label>
                        <br>S
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Posee Componentes</label>
                            <br>N
              </div>
              @endif

              @if($seleccion->seguroBien == '1')
              <div class="col-md-4 form-group">
                  <label>Se encuentra asegurado el Bien</label>
                        <br>S
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Se encuentra asegurado el Bien</label>
                            <br>N
              </div>
              @endif

              @if($seleccion->codRegSeguro == '1')
              <div class="col-md-4 form-group">
                  <label>Código del Registro de Seguro:</label>
                        <br>99
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Código del Registro de Seguro:</label>
                            <br>{{$seleccion->codRegSeguro}}
              </div>
              @endif
            </div>
          </div>
          
          <div class="row text-center separar">
             	<div class="col-md-12 separar form-group">
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT8" title="AnularT8"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('regBienes')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('bienes/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
       </div>
   </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
