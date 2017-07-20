<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Bienes nacionales') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('img/bandera.png') }}" rel="icon">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-submenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('img/bandera.png') }}" rel="icon">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img id="logo" class="subir-10 img-responsive" id="cintilloWeb" src="{{ asset('img/logo.png') }}" alt="Logo"> 
                    </a>
                </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                      
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Formularios de Registros<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu"><a href="">Registrar Tablas</a>

                                    <ul class="dropdown-menu">

                                    <li><a href="tablat1" target="_blank">Tabla 1 </a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 2</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 3</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 4</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 5</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 6</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 7</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 8</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 9</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 10</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 11</a></li>
                                    <li><a href="tablat2" target="_blank">Tabla 12</a></li>
                                        
                                    </ul>
                                </li>
                                 <li class="dropdown-submenu"><a href="">Registrar Inventarios</a>
                                     <ul class="dropdown-menu">
                                        <li><a href="{{ url('/directorio')}}">Directorio telefónico </a></li>
                                        <li><a href="{{ url('/formatos')}}">Formatos</a></li>
                                    </ul>
                                </li>
                            </ul>

                    </li>
                            
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Ver Registros<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu"><a href="">Tablas</a>
                                    <ul class="dropdown-menu">

                                    <li><a href="registroT1" target="_blank">Ver Tabla 1 </a></li>
                                    <li><a href="tablat2" target="_blank">Ver Tabla 2</a></li>
                                    <li><a href="tablat3" target="_blank">Ver Tabla 3</a></li>
                                    <li><a href="tablat4" target="_blank">Ver Tabla 4</a></li>
                                    <li><a href="tablat5" target="_blank">Ver Tabla 5</a></li>
                                    <li><a href="tablat6" target="_blank">Ver Tabla 6</a></li>
                                    <li><a href="tablat7" target="_blank">Ver Tabla 7</a></li>
                                    <li><a href="tablat8" target="_blank">Ver Tabla 8</a></li>
                                    <li><a href="tablat9" target="_blank">Ver Tabla 9</a></li>
                                    <li><a href="tablat10" target="_blank">Ver Tabla 10</a></li>
                                    <li><a href="tablat11" target="_blank">Ver Tabla 11</a></li>
                                    <li><a href="tablat12" target="_blank">Ver Tabla 12</a></li>
                                        
                                    </ul>
                                </li>
                                 <li class="dropdown-submenu"><a href="">Inventarios</a>
                                     <ul class="dropdown-menu">
                                        <li><a href="{{ url('/directorio')}}">Directorio telefónico </a></li>
                                        <li><a href="{{ url('/formatos')}}">Formatos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links-->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
   </div>
    
  

    
 <div class="container" id="sha">
    <div class="row">
       <div class="col-md-12 " >
           <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
       </div>
    </div>
         @yield('content')
</div>

   

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/validatecampoT1.js') }}"></script>
    <script src="{{ asset('js/validatecampoT2.js') }}"></script>
    <script src="{{ asset('js/validatecampoT3.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-submenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
       
<script>
         $(document).ready(function() {
    $('#tablaT1').DataTable( {
        "order": [[ 1, "desc" ]] 
    } );
} );

</script>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <center><footer id="pie">
                    <h6>Vicepresidencia de la República Bolivariana de Venezuela</h6>
                    <h6>Dirección General de Tecnología de la Información - &copy; 2017 Todos los Derechos Reservados</h6>
                </footer></center>
            </div>
        </div>
    </div>

</body>
</html>
