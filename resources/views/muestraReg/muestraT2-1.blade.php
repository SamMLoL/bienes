
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anexo T-2-1</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
  @include('eliminarReg.anularRegT2-1')

<div class="container" id="sha">
    <div class="row separar">
        <div class="panel">
                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-2-1</b></h5></div>
        </div>
    </div>
        
    <div class="row separar40">
       @if($seleccion->codOt2_1 == '0')
       	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DE ORIGEN</label>
        	    <br>B-1
       	</div>

        @else
        <div class="col-md-3 form-group">
            <label>CÓDIGO DE ORIGEN</label>
                <br>{{$seleccion->codOt2_1}}
        </div>
        @endif
        
 
    	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DE FORMA DE ADQUISICIÓN</label>
           	    <br>{{$seleccion->selectT21->opcion}}
        </div>

       @if($seleccion->codPro == '0')
        <div class="col-md-3 form-group">
            <label>CÓDIGO DE PROVEEDOR</label>
                <br>XXX
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>CÓDIGO DE PROVEEDOR</label>
                <br>{{$seleccion->codPro}}
        </div>  	
        @endif

        @if($seleccion->numCom == '0')
        <div class="col-md-3 form-group">
            <label>N° ORDEN DE LA ORDEN DE COMPRA</label>
        	    <br>XXX
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>N° ORDEN DE LA ORDEN DE COMPRA</label>
                <br>{{$seleccion->numCom}}
        </div>
        @endif

    </div>

    <div class="row separar40">

       @if($seleccion->numNota == '0')
        <div class="col-md-3 form-group">
            <label>N° DE LA NOTA DE ENTREGA</label>
        	    <br>XXX
        </div> 
       @else 
        <div class="col-md-3 form-group">
            <label>N° DE LA NOTA DE ENTREGA</label>
                <br>{{$seleccion->numNota}}
        </div> 
       @endif

       @if($seleccion->numFac == '0')
        <div class="col-md-3 form-group">
            <label>N° DE LA NOTA DE FACTURA</label>
              <br>11111111
        </div> 
       @else 
        <div class="col-md-3 form-group">
            <label>N° DE LA NOTA DE FACTURA</label>
                <br>{{$seleccion->numFac}}
        </div> 
       @endif

       @if($seleccion->feCom == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA DE LA ORDEN DE COMPRA</label>
                <br>11111111
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>FECHA DE LA ORDEN DE COMPRA</label>
                <br>{{$seleccion->feCom}}
        </div>
       @endif

       @if($seleccion->feNota == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA DE LA NOTA DE ENTREGA</label>
                <br>11111111
        </div>

       @else
        <div class="col-md-3 form-group">
            <label>FECHA DE LA NOTA DE ENTREGA</label>
                <br>{{$seleccion->feNota}}
        </div>
       @endif
    </div>

    <div class="row separar40">

       @if($seleccion->feFac == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA DE LA FACTURA</label>
                <br>11111111
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>FECHA DE LA FACTURA</label>
                <br>{{$seleccion->feFac}}
        </div>
       @endif

    </div>

    <div class="row text-center separar">
       	<div class="col-md-12 separar form-group">
             <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT21" title="AnularT21"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

             <a href="{{url('registroT2-1')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                
             <a href="{{url ('t21/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
       	</div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
