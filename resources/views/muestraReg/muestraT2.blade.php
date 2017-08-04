<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro Anexo T-2</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
  @include('eliminarReg.anularRegT2')  

<div class="container" id="sha">
        <div class="row separar">
            <div class="panel">
                  <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE ANEXO T-2</b></h5></div>
            </div>
        </div>

    <div class="row separar">
        <div class="col-md-12">
            @if($seleccion->t2_cod_origen == '0')
              <div class="col-md-4 form-group">
                 <label>CÓDIGO DE ORIGEN</label>
                   <br>A-1
              </div>

            @else

              <div class="col-md-4 form-group">
                 <label>CÓDIGO DE ORIGEN</label>
                  <br>{{$seleccion->t2_cod_origen}}
              </div>
            @endif

    		  <div class="col-md-4 form-group">
        	     <label>CÓDIGO DE ADQUISICIÓN</label>
                  <br>{{$seleccion->selectt2->opcion}}
        	  </div>

            @if($seleccion->nom_concurso_t2 == '1')

        	  <div class="col-md-4 form-group">
        	     <label>NOMBRE DEL CONCURSO</label>
                  <br>XXX
        	  </div>
            
            @else	

            <div class="col-md-4 form-group">
                <label>NOMBRE DEL CONCURSO</label>
               <br>{{$seleccion->nom_concurso_t2}}
            </div>
            @endif
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            @if($seleccion->n_concurso_t2 == '0')
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE CONCURSO</label>
                   <br>XXX
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE CONCURSO</label>
                   <br>{{$seleccion->n_concurso_t2}}
                </div>
            @endif

            @if($seleccion->fe_concurso_t2 == '1111-11-11')
                <div class="col-md-4 form-group">
                    <label>FECHA DE CONCURSO</label>
                  <br>11111111
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>FECHA DE CONCURSO</label>
                  <br>{{$seleccion->fe_concurso_t2}}
                </div>
            @endif

            @if($seleccion->cod_proveedor_t2 == '0')
                <div class="col-md-4 form-group">
                    <label>CÓDIGO DE PROVEEDOR</label>
                   <br>XXX
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>CÓDIGO DE PROVEEDOR</label>
                   <br>{{$seleccion->cod_proveedor_t2}}
                </div>
            @endif
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            @if($seleccion->n_contracto_t2 == '0')
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE CONTRATO</label>
                   <br>XXX
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE CONTRATO</label>
                   <br>{{$seleccion->n_contracto_t2}}
                </div>
            @endif

            @if($seleccion->fe_contracto_t2 == '1111-11-11')
                <div class="col-md-4 form-group">
                    <label>FECHA DEL CONTRATO</label>
                   <br>11111111
                </div>
            @else

                <div class="col-md-4 form-group">
                    <label>FECHA DEL CONTRATO</label>
                   <br>{{$seleccion->fe_contracto_t2}}
                </div>
            @endif

            @if($seleccion->n_notaentrega_t2 == '0')
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE LA NOTA DE ENTREGA</label>
                   <br>XXX
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE LA NOTA DE ENTREGA</label>
                   <br>{{$seleccion->n_notaentrega_t2}}
                </div>
            @endif
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">
            @if($seleccion->fe_nota_entrega_t2 = '1111-11-11')
                <div class="col-md-4 form-group">
                    <label>FECHA DE LA NOTA DE  ENTREGA</label>
                  <br>11111111
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>FECHA DE LA NOTA DE  ENTREGA</label>
                   <br>{{$seleccion->fe_nota_entrega_t2}}
                </div>
            @endif

            @if($seleccion->n_factura_t2 == '0')
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE LA FACTURA</label>
                   <br>XXX
                </div>
            @else
                <div class="col-md-4 form-group">
                    <label>NÚMERO DE LA FACTURA</label>
                   <br>{{$seleccion->n_factura_t2}}
                </div>
            @endif

            @if($seleccion->fe_factura_t2 == '1111-11-11')
                 <div class="col-md-4 form-group">
                    <label>FECHA DE LA FACTURA</label>
                  <br>11111111
                </div>
            @else
                <div class="col-md-4 form-group separar40">
                    <label>FECHA DE LA FACTURA</label>
                  <br>{{$seleccion->fe_factura_t2}}
                </div>
            @endif
        </div>

        <div class="row text-center separar">
            <div class="col-md-12">
                <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT2" title="AnularT2"><i class="fa fa-trash-o" aria-hidden="true"></i> <b>Eliminar </b></a>  

                <a href="{{url('registroT2')}}" class="btn btn-danger"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>

                <a href="{{url ('t2/'.$seleccion->id) }}/edit" class="btn btn-danger" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

