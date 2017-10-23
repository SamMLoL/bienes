<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', 'Bienes Nacionales') }}</title>
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
                                <li class="dropdown-submenu"><a href="">Registrar Datos</a>
                                    <ul class="dropdown-menu">
                            <!--SUB-MENU DE ANEXOS T-->
                            <li><a href="tablat1">Proveedores</a></li>
                                <li class="dropdown-submenu"><a href="">Modalidades</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="tablat2">Compra por Concurso</a></li>
                                        <li><a href="tablat2-1">Compra Directa</a></li>
                                        <li><a href="tablat2-2">Confiscación</a></li>
                                        <li><a href="tablat2-3">Dación en Pago</a></li>
                                        <li><a href="tablat2-4">Donación</a></li>
                                        <li><a href="tablat2-5">Expropiación</a></li>
                                        <li><a href="tablat2-6">Permuta</a></li>
                                        <li><a href="tablat2-7">Transferencia</a></li>
                                        <li><a href="tablat2-8">Adjudicación</a></li>
                                    </ul>
                                </li>

                                    <li><a href="tablat3">Seguros</a></li>
                                    <li><a href="tablat4">Responsables de los Bienes</a></li>
                                    <li><a href="tablat5">Marcas</a></li>
                                    <li><a href="tablat6">Modelos</a></li>
                                    <li><a href="tablat2">Componentes</a></li>
                                    <li><a href="#">Bienes</a></li>
                                    <li><a href="tablat2">Equipo de Transporte</a></li>
                                    <li><a href="tablat2">Semovientes</a></li>
                                    <li><a href="tablat2">Bienes Muebles e Inmuebles</a></li>
                                    <li><a href="tablat2">Bienes de Inmuebles del Organo</a></li>
                                   
                                        
                                    </ul>
                                </li>
                             <!--SUB-MENU DE INVENTARIOS-->
                                <li class="dropdown-submenu"><a href="">Consultar Datos</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="registroT1">Proveedores</a></li>
                                        <li class="dropdown-submenu"><a href="">Modalidades</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="registroT2">Compra por Concurso</a></li>
                                            <li><a href="registroT2-1">Compra Directa</a></li>
                                            <li><a href="registroT2-2">Confiscación</a></li>
                                            <li><a href="registroT2-3">Dación en Pago</a></li>
                                            <li><a href="registroT2-4">Donación</a></li>
                                            <li><a href="registroT2-5">Expropiación</a></li>
                                            <li><a href="registroT2-6">Permuta</a></li>
                                            <li><a href="registroT2-7">Transferencia</a></li>
                                            <li><a href="registroT2-8">Adjudicación</a></li>
                                        </ul>
                                       </li>
                                       <li><a href="registroT3">Seguros</a></li>
                                       <li><a href="registroT4">Responsables de los Bienes</a></li>
                                       <li><a href="registroT5">Marcas</a></li>
                                       <li><a href="registroT6">Modelos</a></li>
                                       <li><a href="registroT7">Componentes</a></li>
                                       <li><a href="registroT8">Bienes</a></li>
                                       <li><a href="registroT9">Equipo de Transporte</a></li>
                                       <li><a href="registroT10">Semovientes</a></li>
                                       <li><a href="registroT11">Bienes Muebles e Inmuebles</a></li>
                                       <li><a href="registroT12">Bienes de Inmuebles del Órgano</a></li>
                                      
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                         <!-- Right Side Of Navbar -->
                         <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links-->
                      
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <i class="fa fa-user" aria-hidden="true"></i> {{ $_SESSION['nombre'] }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}">
                                           Cerrar Sesión
                                        </a>
                                   
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <i class="fa fa-cog" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/bitacora') }}">
                                        Bitácora  <i class="fa fa-archive" aria-hidden="true"></i>  
                                        </a>

                                        <a href="{{ url('/marcas') }}">
                                        Añadir marca  <i class="fa fa-plus-circle" aria-hidden="true"></i>  
                                        </a>

                                        <a href="{{ url('/logout') }}">
                                        Añadir modelo  <i class="fa fa-plus-circle" aria-hidden="true"></i>  
                                        </a>

                                    </li>
                                </ul>
                            </li>
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
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/validateCampoMarcas.js') }}"></script>
    <script src="{{ asset('js/validateCampoT1.js') }}"></script>
    <script src="{{ asset('js/validateCampoT2.js') }}"></script>
    <script src="{{ asset('js/validateCampoT3.js') }}"></script>
    <script src="{{ asset('js/validateCampoT21.js') }}"></script>
    <script src="{{ asset('js/validateCampoT22.js') }}"></script>
    <script src="{{ asset('js/validateCampoT23.js') }}"></script>
    <script src="{{ asset('js/validateCampoT24.js') }}"></script>
    <script src="{{ asset('js/validateCampoT25.js') }}"></script>
    <script src="{{ asset('js/validateCampoT26.js') }}"></script>
    <script src="{{ asset('js/validateCampoT27.js') }}"></script>
    <script src="{{ asset('js/validateCampoT28.js') }}"></script>
    <script src="{{ asset('js/validateCampoT3.js') }}"></script>
    <script src="{{ asset('js/validateCampoT4.js') }}"></script>
    <script src="{{ asset('js/validateCampoT5.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-submenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/tabla.datatable.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
   

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
