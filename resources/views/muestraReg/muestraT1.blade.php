
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
    <div class="row separar">
        <div class="panel">
                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-1</b></h5></div>
        </div>
    </div>
        
    <div class="row separar">
       	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DEL PROVEEDOR</label>
        	    <br>{{$seleccion->cod_proveedor_t1}}
       	</div>

    	<div class="col-md-3 form-group">
       	    <label>DESCRIPCIÓN DEL PROVEEDOR</label>
           	    <br>{{$seleccion->desc_prove_t1}}
        </div>

        <div class="col-md-3 form-group">
            <label>TIPO DE PROVEEDOR</label>
                <br>{{$seleccion->selectT1->opcion}}
        </div>
        
        @if($seleccion->t1_rif == '0')
        <div class="col-md-3">
            <label for="t1_rif">NÚMERO DE RIF -J</label>
            <br>XXX
        </div>
        @else
        <div class="col-md-3">
            <label for="t1_rif">NÚMERO DE RIF -J</label>
            <br>{{$seleccion->t1_rif}}
        </div>
        @endif
    </div>
    
    <div class="row">
         @if($seleccion->otr_descr_t1 == '0')
        <div class="col-md-3 form-group">
            <label>OTRA DESCRIPCION</label>
                <br>XXX
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>OTRA DESCRIPCION</label>
                <br>{{$seleccion->otr_descr_t1}}
        </div>  
        @endif
    </div>

    <div class="row bajar-10">
  <div class="col-md-6 col-md-offset-3">
    <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
      <thead>
        <tr>
          <th>Usuario</th>
          <th>Fecha - Hora</th>
         
          
        </tr>
      </thead>
      <tbody>

          <tr>
            <td></td>
            <td>{{$seleccion->created_at->format('d/m/Y - H:m:s')}}</td>

        

          </tr>
  
      </tbody>
    </table>
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
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
