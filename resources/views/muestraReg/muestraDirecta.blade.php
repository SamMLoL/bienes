
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Directa</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>

  @include('eliminarReg.anularDirecta')

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel">
                      <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                    <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE COMPRA DIRECTA</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
                </div>   
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
                </div>
            </div>

           <hr>
              
            <div class="row separar40">
                <div class="col-md-12">
                   @if($seleccion->codOt2_1 == '0')
                   	<div class="col-md-4 form-group">
                   	    <label>Código de Origen</label>
                    	    <br>B-1
                   	</div>

                    @else
                    <div class="col-md-4 form-group">
                        <label>Código de Origen</label>
                            <br>{{$seleccion->codOt2_1}}
                    </div>
                    @endif
                  
           
              	    <div class="col-md-4 form-group">
                 	      <label>Código de Adquisición</label>
                     	    <br>{{$seleccion->selectDirecta->opcion}}
                    </div>

                   @if($seleccion->codPro == '0')
                    <div class="col-md-4 form-group">
                        <label>Código de Proveedor</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Código de Proveedor</label>
                            <br>{{$seleccion->codPro}}
                    </div>  	
                    @endif
                  </div>
            </div>

            <div class="row separar40">
                <div class="col-md-12">
                    @if($seleccion->numCom == '0')
                    <div class="col-md-4 form-group">
                        <label>Número Orden de Compra</label>
                    	    <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Número Orden de Compra</label>
                            <br>{{$seleccion->numCom}}
                    </div>
                    @endif


                   @if($seleccion->numNota == '0')
                    <div class="col-md-4 form-group">
                        <label>Número Nota de Entrega</label>
                    	    <br>xxx
                    </div> 
                   @else 
                    <div class="col-md-4 form-group">
                        <label>Número Nota de Entrega</label>
                            <br>{{$seleccion->numNota}}
                    </div> 
                   @endif

                   @if($seleccion->numFac == '0')
                    <div class="col-md-4 form-group">
                        <label>Número de Factura</label>
                          <br>11111111
                    </div> 
                   @else 
                    <div class="col-md-4 form-group">
                        <label>Número de Factura</label>
                            <br>{{$seleccion->numFac}}
                    </div> 
                   @endif
                </div>
            </div>

            <div class="row separar">
                <div class="col-md-12">
                   @if($seleccion->feCom == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha Orden de Compra</label>
                            <br>11111111
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Fecha Orden de Compra</label>
                            <br>{{$seleccion->feCom}}
                    </div>
                   @endif

                   @if($seleccion->feNota == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha Nota de Entrega</label>
                            <br>11111111
                    </div>

                   @else
                    <div class="col-md-4 form-group">
                        <label>Fecha Nota de Entrega</label>
                            <br>{{$seleccion->feNota}}
                    </div>
                   @endif

                   @if($seleccion->feFac == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Factura</label>
                            <br>11111111
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Fecha de Factura</label>
                            <br>{{$seleccion->feFac}}
                    </div>
                   @endif
                </div>
            </div>
              
            <div class="row text-center separar">
                <div class="col-md-12 separar form-group">
                    <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT21" title="AnularT21"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                    <a href="{{url('regDirecta')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                          
                    <a href="{{url ('directa/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
