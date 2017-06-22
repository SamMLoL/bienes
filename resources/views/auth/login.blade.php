<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('', 'Bienes nacionales') }}</title>

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/login.css') }}" rel="stylesheet">   
            <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
            <link href="{{ asset('img/bandera.png') }}" rel="icon">
            <!-- Scripts -->
            <script>
                window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                ]) !!};
            </script>
          
        </head>
<body>


<!--@section('content')-->

    <div class="container" id="containerCentro">
        <div class="login-container">
           <div id="output"></div>
             <div class="avatar"></div>
               <div class="form-box">

    <div class="row">

        <div class="col-md-12 ">
          <div class="panel-heading-info" id="panelheading">  
            <div class="panel panel-info" id="colorpanel"><h4><b id="colortitulo">Bienes Nacionales</b></h4></div>      
            
          </div> 
          
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
         
                   <!--  <label for="email" class="col-md-4 control-label">Correo</label>
 <div class="col-md-4 " >
       
     </div> -->
                              <!-- Error de login Correo y clave-->
                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

<div class="col-md-8 col-md-offset-2 inputbr"><br>
    <div class="input-group" >
       <span class="input-group-addon" id="colorpanel"><b id="colortitulo">@</b></span>
        <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" placeholder="Ingrese su correo electrónico" aria-describedby="inputGroupprimary3Status" required autofocus>
    </div>
      <span id="inputGroupsuccess3Status" class="sr-only">(success)</span>

</div>

          </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                         <!--    <label for="password" class="col-md-4 control-label">Contraseña</label> -->
      <div class="col-md-8 col-md-offset-2 ">
        <div class="input-group">
          <span class="input-group-addon" id="colorpanel"> <i id="colortitulo" class="fa fa-key" aria-hidden="true"></i></span>
           <input  id="password" type="password" class="form-control " name="password" placeholder="Ingrese su contraseña"  required>
         </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                               <br> <input  type="image" src="{{URL::asset('/img/canda2.jpg')}}" type="submit"  height="80" width="80" id="imgcandado">
                            </div>
                        </div>
                    </form>
      
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>
