<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', 'Pruebas de sistema') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet" type="text/css">
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
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">PAGINAS DEL MENU <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu" role="menu">
                         
                            <li class="dropdown-MENU"><a href="prueba">PAGINAS</a>
                                    <ul class="dropdown-menu">             
                                                                           
                        </ul>
                    </li>
                  </li>
                </ul>
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
