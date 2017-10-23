
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anexo T-1</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
  @include('eliminarReg.anularRegT1')

<div class="container" id="sha">
  <div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="panel">
                  <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-1</b></h5></div>
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
             	<div class="col-md-4 form-group">
             	    <label>Código del Proveedor</label>
              	    <br>{{$seleccion->cod_proveedor_t1}}
             	</div>

              <div class="col-md-4 form-group">
             	    <label>Descripción del Proveedor</label>
                 	    <br>{{$seleccion->desc_prove_t1}}
              </div>

              <div class="col-md-4 form-group">
                  <label>Tipo de Proveedor</label>
                      <br>{{$seleccion->selectT1->opcion}}
              </div>
            </div>
          </div>
          
          <div class="row separar40">
            <div class="col-md-12">

              <div class="col-md-4 form-group">
                  <label for="t1_rif">Número de Rif</label>
                  <br>{{$seleccion->t1_rif}}
              </div>

               @if($seleccion->otr_descr_t1 == '0')
              <div class="col-md-4 form-group">
                  <label>Otra Descripción</label>
                      <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otra Descripción</label>
                      <br>{{$seleccion->otr_descr_t1}}
              </div>  
              @endif
            </div>
          </div>

          <div class="row text-center separar">
             	<div class="col-md-12 separar form-group">
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularR" title="AnularR"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('registroT1')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('t1/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
          
    </div>
  </div> 
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
