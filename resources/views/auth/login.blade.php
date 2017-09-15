<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/bandera.png') }}" type="image/x-icon">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', 'Bienes Nacionales') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/formulario.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">   
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
    <body>
       <div class="container" id="containerCentro">
           <div class="login-container">
             <div id="output"></div>
               <div class="avatar"></div>
                 <div class="form-box"> 


            <div class="row">
                <div class="col-md-12">
                        <div class="panel-heading-info" id="panelheading">  
                            <div class="panel panel-info" id="colorpanel"><h4><b id="colortitulo">Bienes Nacionales</b></h4>
                          </div>      
                        </div> 


                      <div class="panel-body">
                        <form class="form-horizontal form-estilo" role="form" method="POST" id="loginForm" name="loginForm" action="{{ url('/sesion') }}">
                        {{ csrf_field() }}
    
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-6">
                                    <input placeholder="Ingrese su usuario" id="user" type="text" class="form-control" name="user" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>
                                <div class="col-md-6">
                                    <input placeholder="Ingrese su contraseña" id="pass" type="password" class="form-control" name="pass">
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12 text-center desvanecer">
                                @if(session()->has('msj'))
                                  <div class="col-md-12  alert alert-warning" >
                                    {{session('msj')}}
                                  </div>
                                @endif

                                @if(session()->has('errormsj'))
                                  <div class="col-md-12  alert alert-danger" >
                                    {{session('errormsj')}}
                                  </div>
                                @endif
                              </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 boton">
                                    <button type="submit" class="btn btn-success">
                                        <b>Iniciar Sesión</b>
                                    </button>
                                </div>
                            </div>

                      </form>
                    </div>
                 
                </div>
              </div>
            </div>
          </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <center><footer id="pie">
                    <h6>Vicepresidencia de la República Bolivariana de Venezuela</h6>
                    <h6>Dirección General de Tecnología de la Información - &copy; 2017 Todos los Derechos Reservados</h6>
                </footer></center>
            </div>
        </div>
  </div>

    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    </body>
</html>