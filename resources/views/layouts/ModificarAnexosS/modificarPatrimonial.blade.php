<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Modificar Patrimonial</title>

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('img/bandera.png') }}" rel="icon">

  </head>
<body>

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel">
                     <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                   <div class="panel-heading text-center"><h5><b>MODIFICAR DATOS DEL RESPONSABLE PATRIMONIAL DEL ÓRGANO O ENTE <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_s3->id}}</b></h4>
                </div>
            </div>
            
          <hr>

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

    <form role="form" method="POST" action="{{route('patrimonial.update', $form_s3->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="cedula">Cédula</label>
                       @if($form_s3->cedula == '1')
                          <input type="text" class="form-control" name="cedula" id="cedula" value="xxx"  placeholder="Introduzca el número de cédula" maxlength="8"> 
                       @else
                          <input type="text" class="form-control" name="cedula" id="cedula" value="{{$form_s3->cedula}}"  placeholder="Introduzca el número de cédula" maxlength="8"> 
                       @endif
                    </div>
               
                    <div class="col-md-4">
                       <label for="nombre">Nombre</label> 
                        @if($form_s3->nombre == '1')  
                          <input type="text" class="form-control" name="nombre" id="nombre" value="xxx" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="nombre" id="nombre" value="{{$form_s3->nombre}}" maxlength="100">
                        @endif
                    </div>
                    
                    <div class="col-md-4">
                       <label for="nombre">Apellido</label> 
                        @if($form_s3->apellido == '1')  
                          <input type="text" class="form-control" name="apellido" id="apellido" value="xxx" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="apellido" id="apellido" value="{{$form_s3->apellido}}" maxlength="100">
                        @endif
                    </div>
                </div>
            </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="nombre">Teléfono</label> 
                        @if($form_s3->telefono == '0')  
                          <input type="text" class="form-control" name="telefono" id="telefono" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="telefono" id="telefono" value="{{$form_s3->telefono}}" maxlength="10">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="nombre">Cargo</label> 
                        @if($form_s3->cargo == '1')  
                          <input type="text" class="form-control" name="cargo" id="cargo" value="xxx" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="cargo" id="cargo" value="{{$form_s3->cargo}}" maxlength="100">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="nombre">Correo Electrónico</label> 
                        @if($form_s3->correo == '1')  
                          <input type="text" class="form-control" name="correo" id="correo" value="xxx" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="correo" id="correo" value="{{$form_s3->correo}}" maxlength="100">
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="row separar">
                <div class="col-md-12">    
                    <div class="col-md-4">
                       <label for="numGaceta">Número de Gaceta</label> 
                        @if($form_s3->numGaceta == '0')  
                          <input type="text" class="form-control" name="numGaceta" id="numGaceta" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="numGaceta" id="numGaceta" value="{{$form_s3->numGaceta}}" maxlength="10" onkeypress="return soloNum(event)">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="telfEnte">Fecha Gaceta</label> 
                        @if($form_s3->feGaceta == '1111-11-11')  
                          <input type="text" class="form-control calendario" name="feGaceta" id="feGaceta" value="11111111" maxlength="10"> 
                        @else
                          <input type="text" class="form-control calendario" name="feGaceta" id="feGaceta" value="{{$form_s3->feGaceta}}" maxlength="10">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="numDecre">Número de Resolución ó Decreto</label> 
                        @if($form_s3->numDecre == '0')  
                          <input type="text" class="form-control" name="numDecre" id="numDecre" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="numDecre" id="numDecre" value="{{$form_s3->numDecre}}" maxlength="10" onkeypress="return soloNum(event)">
                        @endif
                    </div>
                </div> 
            </div>
<!--FIN DEL SEGUNDO ROW DE INPUT-->
            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="telfEnte">"Fecha de Resolución ó Decreto</label> 
                        @if($form_s3->feDecre == '1111-11-11')  
                          <input type="text" class="form-control calendario" name="feDecre" id="feDecre" value="11111111" maxlength="10"> 
                        @else
                          <input type="text" class="form-control calendario" name="feDecre" id="feDecre" value="{{$form_s3->feDecre}}" maxlength="10">
                        @endif
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-md-12 form-group"><br>
                    <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                     <a href="{{ url('/regPatrimonial') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
                  </div>
              </div>
        </div>
    </div>
</div>
</form>
</body>
</html>

    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/inputDinamicobienes.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
    <script src="{{ asset('js/contadorTextarea.js') }}"></script>