<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Modificar Sedes</title>

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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR DATOS DE LAS SEDES Y LUGARES SIMILARES DEL ÓRGANO O ENTE <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_s4->id}}</b></h4>
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

    <form role="form" method="POST" action="{{route('sedes.update', $form_s4->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="codSede">Código de la Sede</label>
                       @if($form_s4->codSede == '1')
                          <input type="text" class="form-control" name="codSede" id="codSede" value="xxx"  placeholder="Introduzca el número de cédula" maxlength="10"> 
                       @else
                          <input type="text" class="form-control" name="codSede" id="codSede" value="{{$form_s4->codSede}}"  placeholder="Introduzca el número de cédula" maxlength="10"> 
                       @endif
                    </div>
               
                    <div class="col-md-4 form-group separar">
                      <label for="tipoSedes">Tipo de Sede</label>
                         <select name="tipoSedes" id="tipoSedes" class="form-control">
                              <option value="{{$form_s4->selectSedes->id}}">{{$form_s4->selectSedes->opcion}}</option>
                            @foreach($lugarSedes as $form)
                              @if($form->id != $form_s4->selectSedes->id)
                              <option value="{{$form->id}}">{{$form->opcion}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>
                    
                    <div class="col-md-4">
                       <label for="nombre">Especifique Tipo de Sede o Lugar</label> 
                        @if($form_s4->espeSede == '1')  
                          <input type="text" class="form-control" name="espeSede" id="espeSede" value="noaplica" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="espeSede" id="espeSede" value="{{$form_s4->espeSede}}" maxlength="100">
                        @endif
                    </div>
                </div>
            </div>

            <div class="row separar">
                <div class="col-md-10 form-estilo col-md-offset-1">
                    <li>Descripción de la Sede </li>
                        @if($form_s4->descSede == '1')
                      <textarea name="descSede" id="descSede" value="xxx" class="form-control" maxlength="255" rows="4">xxx</textarea>
                      <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
                        @else
                      <textarea name="descSede" id="descSede" value="{{$form_s4->descSede}}" class="form-control" maxlength="255" rows="4">{{$form_s4->descSede}}</textarea>
                      <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
                        @endif
                </div>
            </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4 form-group">
                      <label for="localizacion">Tipo de Sede</label>
                         <select name="localizacion" id="localizacion" class="form-control">
                              <option value="{{$form_s4->selectLocalizacion->id}}">{{$form_s4->selectLocalizacion->opcion}}</option>
                            @foreach($selectLoca as $form)
                              @if($form->id != $form_s4->selectLocalizacion->id)
                              <option value="{{$form->id}}">{{$form->opcion}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>

                    <div class="col-md-4 form-group separar">
                      <label for="codPais">Código del País donde se Ubica la Sede</label>
                         <select name="codPais" id="codPais" class="form-control">
                              <option value="{{$form_s4->selectPais->id}}">{{$form_s4->selectPais->pais}}</option>
                            @foreach($selectPais as $form)
                              @if($form->id != $form_s4->selectPais->id)
                              <option value="{{$form->id}}">{{$form->pais}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>

                    <div class="col-md-4 separar">
                       <label for="espeOtroPais">Especifique Otro País </label> 
                        @if($form_s4->espeOtroPais == '1')  
                          <input type="text" class="form-control" name="espeOtroPais" id="espeOtroPais" value="noaplica" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="espeOtroPais" id="espeOtroPais" value="{{$form_s4->espeOtroPais}}" maxlength="100" onkeypress="return soloNum(event)">
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="row separar">
                <div class="col-md-12">    
                    <div class="col-md-4 form-group">
                      <label for="codParroquia">Código de Parroquia donde se Ubica el Ente</label>
                         <select name="codParroquia" id="codParroquia" class="form-control">
                              <option value="{{$form_s4->selectParroquia->id}}">{{$form_s4->selectParroquia->parroquia}}</option>
                            @foreach($selectParroquia as $form)
                              @if($form->id != $form_s4->selectParroquia->id)
                              <option value="{{$form->id}}">{{$form->parroquia}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>

                    <div class="col-md-4 form-group separar">
                      <label for="codCiudad">Código de la Ciudad donde se Ubica el Ente </label>
                         <select name="codCiudad" id="codCiudad" class="form-control">
                              <option value="{{$form_s4->selectCodCiudad->id}}">{{$form_s4->selectCodCiudad->ciudad}}</option>
                            @foreach($selectCiudad as $form)
                              @if($form->id != $form_s4->selectCodCiudad->id)
                              <option value="{{$form->id}}">{{$form->ciudad}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>

                    <div class="col-md-4 form-group separar">
                       <label for="espeOtroCiudad">Especifique Nombre de la Otra Ciudad </label> 
                        @if($form_s4->espeOtroCiudad == '1')  
                          <input type="text" class="form-control" name="espeOtroCiudad" id="espeOtroCiudad" value="noaplica" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="espeOtroCiudad" id="espeOtroCiudad" value="{{$form_s4->espeOtroCiudad}}" maxlength="100" onkeypress="return soloNum(event)">
                        @endif
                    </div>
                </div> 
            </div>
<!--FIN DEL SEGUNDO ROW DE INPUT-->
            <div class="row form-group separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="urbanizacion">Urbanización </label> 
                        @if($form_s4->urbanizacion == '1')  
                          <input type="text" class="form-control" name="urbanizacion" id="urbanizacion" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="urbanizacion" id="urbanizacion" value="{{$form_s4->urbanizacion}}" maxlength="10">
                        @endif
                    </div>

                    <div class="col-md-4 form-group separar">
                       <label for="calleAvenida">Calle / Avenida  </label> 
                        @if($form_s4->calleAvenida == '1')  
                          <input type="text" class="form-control" name="calleAvenida" id="calleAvenida" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="calleAvenida" id="calleAvenida" value="{{$form_s4->calleAvenida}}" maxlength="10">
                        @endif
                    </div>

                    <div class="col-md-4 form-group separar">
                       <label for="casaEdificio">Casa / Edificio  </label> 
                        @if($form_s4->casaEdificio == '1')  
                          <input type="text" class="form-control" name="casaEdificio" id="casaEdificio" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="casaEdificio" id="casaEdificio" value="{{$form_s4->casaEdificio}}" maxlength="10">
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 form-group separar">
                       <label for="piso">Piso  </label> 
                        @if($form_s4->piso == '1')  
                          <input type="text" class="form-control" name="piso" id="piso" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="piso" id="piso" value="{{$form_s4->piso}}" maxlength="10">
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