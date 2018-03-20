<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Modificar Datos Bienes</title>

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  </head>
<body>

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel">
                     <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                   <div class="panel-heading text-center"><h5><b>MODIFICAR DATOS DE LOS COMPONENTES DE LOS BIENES <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t11->id}}</b></h4>
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

    <form role="form" method="POST" action="{{route('datosbienes.update', $form_t11->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="codBien">Código del Origen del Bien</label>
                          <input type="text" class="form-control" name="codBien" id="codBien" value="{{$form_t11->codBien}}"  placeholder="Introduzca nombres" maxlength="20"> 
                    </div>
               
                    <div class="col-md-4">
                       <label for="codCompo">Código interno del Componente</label> 
                        @if($form_t11->codCompo == '1')  
                          <input type="text" class="form-control" name="codCompo" id="codCompo" value="xxx" maxlength="20"> 
                        @else
                          <input type="text" class="form-control" name="codCompo" id="codCompo" value="{{$form_t11->codCompo}}" maxlength="20">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="serialCompo">Serial del Componente</label> 
                        @if($form_t11->serialCompo == '1')  
                          <input type="text" class="form-control" name="serialCompo" id="serialCompo" value="xxx" maxlength="30"> 
                        @else
                          <input type="text" class="form-control" name="serialCompo" id="serialCompo" value="{{$form_t11->serialCompo}}" maxlength="30">
                        @endif
                    </div>
                </div>
            </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
            <div class="row separar">
                <div class="col-md-12 form-group">                
                    <div class="col-md-4 ">
                         <label for="codTipoCompo">Código del Tipo de Componente</label>
                        @if($form_t11->codTipoCompo == '1')
                          <input type="text" class="form-control" name="codTipoCompo" id="codTipoCompo" value="xxx"  placeholder="Introduzca nombres" maxlength="10">
                        @else
                          <input type="text" class="form-control" name="codTipoCompo" id="codTipoCompo" value="{{$form_t11->codTipoCompo}}"  placeholder="Introduzca el código del componente" maxlength="10">
                        @endif
                    </div>

                    <div class="col-md-4 ">
                        <label><b>Código de la Marca del Componente:</b></label>
                          <select name="codMarca" id="codMarca3" class="form-control">
                            <option value="{{$form_t11->selectMarcadatosb->id}}">{{$form_t11->selectMarcadatosb->codMarca}}</option>
                              @foreach($marcas as $traeDir)
                                @if($traeDir->id != $form_t11->selectMarcadatosb->id)
                            <option value="{{$traeDir->id}}">{{$traeDir->codMarca}}</option> 
                                @endif
                              @endforeach
                          </select>
                    </div>

                    <div class="col-md-4 ">
                      <label><b>Código Modelo del Componente:</b></label>
                          <select name="codModel" id="codModel3" class="form-control">
                              <option value="{{$form_t11->selectModeldatosb->id}}" >{{$form_t11->selectModeldatosb->codModel}}</option>
                                @foreach($modelos as $traeDir)
                                  @if($traeDir->id != $form_t11->selectModeldatosb->id)
                              <option value="{{$traeDir->id}}">{{$traeDir->codModel}}</option> 
                                @endif
                                @endforeach
                          </select>
                    </div>
                </div>
            </div>
                    
            <div class="row col-md-offset-1">
                <div class="col-md-12">
                    <div class="col-md-10 form-estilo">
                      <label>Descripción del Estado del Bien:</label>
                        @if($form_t11->descCompo == '1')
                        <textarea name="descCompo" id="descCompo" value="xxx" class="form-control" maxlength="255" rows="4">xxx</textarea>
                        <div id="negro" for="contador">Caracteres: <div class="rojo" id="conDatos">0/255</div> </div>
                                 
                        @else
                        <textarea name="descCompo" id="descCompo" class="form-control" maxlength="255" rows="4">{{$form_t11->descCompo}}</textarea>
                        <div id="negro" for="contador">Caracteres: <div class="rojo" id="conDatos">0/255</div> </div>
                        @endif
                    </div>
                </div>
           </div>

           <input type="hidden" id="rut" value="{{url('dropdown2')}}">

<!--FIN DEL SEGUNDO ROW DE INPUT-->
              <div class="row">
                  <div class="col-md-12 form-group"><br>
                    <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                    
                     <a href="{{ url('/regDatosbienes') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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
    <script src="{{ asset('js/inputDinamicoanexosT.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
    <script src="{{ asset('js/contadorTextarea.js') }}"></script>