<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Modificar Básicos</title>

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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR BÁSICOS <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_s1->id}}</b></h4>
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

    <form role="form" method="POST" action="{{route('basicos.update', $form_s1->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="codSigecof">Código SIGECOF</label>
                          <input type="text" class="form-control" name="codSigecof" id="codSigecof" value="{{$form_s1->codSigecof}}"  placeholder="Introduzca nombres" maxlength="30"> 
                    </div>
               
                    <div class="col-md-4">
                       <label for="siglas">Siglas</label> 
                        @if($form_s1->siglas == '1')  
                          <input type="text" class="form-control" name="siglas" id="siglas" value="xxx" maxlength="15"> 
                        @else
                          <input type="text" class="form-control" name="siglas" id="siglas" value="{{$form_s1->siglas}}" maxlength="15">
                        @endif
                    </div>
              
                    <div class="col-md-1 form-group ">
                      <label></label>
                         <select name="grupo" id="grupo" class="form-control">
                            <option value="1" >J</option>
                            <option value="2" >V</option>
                            <option value="3" >G</option>
                         </select>
                    </div>

                    <div class="col-md-3">
                      <label for="rifProvee">RIF</label>   
                       <input type="text" class="form-control" name="rifProvee" id="rifProvee" value="{{$form_s1->rifProvee}}" maxlength="20"> 
                    </div>
                </div>
            </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
            <div class="row separar col-md-offset-1">
                <div class="col-md-12">
                    <div class="col-md-10 form-estilo">
                      <label>Razón Social:</label>
                        @if($form_s1->razonSocial == '1')
                        <textarea name="razonSocial" id="razonSocial" value="xxx" class="form-control" maxlength="255" rows="4">xxx</textarea>
                        <div id="negro" for="contador">Caracteres: <div class="rojo" id="basicos">0/255</div> </div>
                                 
                        @else
                        <textarea name="razonSocial" id="razonSocial" class="form-control" maxlength="255" rows="4">{{$form_s1->razonSocial}}</textarea>
                        <div id="negro" for="contador">Caracteres: <div class="rojo" id="basicos">0/255</div> </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="row separar">
                <div class="col-md-12">    
                    <div class="col-md-4">
                       <label for="telfEnte">Teléfono</label> 
                        @if($form_s1->telfEnte == '0')  
                          <input type="text" class="form-control" name="telfEnte" id="telfEnte" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="telfEnte" id="telfEnte" value="{{$form_s1->telfEnte}}" maxlength="10" onkeypress="return soloNum(event)">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="telfEnte">Dirección Web</label> 
                        @if($form_s1->direcWeb == '1')  
                          <input type="text" class="form-control" name="direcWeb" id="direcWeb" value="xxx" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="direcWeb" id="direcWeb" value="{{$form_s1->direcWeb}}" maxlength="100">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="telfEnte">Correo Electrónico</label> 
                        @if($form_s1->correEnte == '1')  
                          <input type="text" class="form-control" name="correEnte" id="correEnte" value="xxx" maxlength="100"> 
                        @else
                          <input type="text" class="form-control" name="correEnte" id="correEnte" value="{{$form_s1->correEnte}}" maxlength="100">
                        @endif
                    </div>
                </div> 
            </div>
<!--FIN DEL SEGUNDO ROW DE INPUT-->
            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="telfEnte">Fecha Gaceta</label> 
                        @if($form_s1->feGaceta == '1111-11-11')  
                          <input type="text" class="form-control calendario" name="feGaceta" id="feGaceta" value="11111111" maxlength="10"> 
                        @else
                          <input type="text" class="form-control calendario" name="feGaceta" id="feGaceta" value="{{$form_s1->feGaceta}}" maxlength="10">
                        @endif
                    </div>

                    <div class="col-md-4">
                       <label for="telfEnte">Número de Gaceta</label> 
                        @if($form_s1->numGaceta == '1')  
                          <input type="text" class="form-control" name="numGaceta" id="numGaceta" value="xxx" maxlength="10"> 
                        @else
                          <input type="text" class="form-control" name="numGaceta" id="numGaceta" value="{{$form_s1->numGaceta}}" maxlength="10">
                        @endif
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-md-12 form-group"><br>
                    <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                     <a href="{{ url('/regBasicos') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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