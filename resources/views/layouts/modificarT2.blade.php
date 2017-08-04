<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Modificar Anexo T-1</title>

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  </head>
<body>

  <div class="container" id="sha">
      <div class="row separar">
          <div class="panel">
               <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T-2</b></h5></div>
          </div>
      </div>

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

    <form role="form" method="POST" action="{{route('t2.update', $form_t2->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

          <div class="row">
              <div class="col-md-4">
                <label for="t2_cod_origen">CÓDIGO DE ORIGEN</label>
              @if($form_t2->t2_cod_origen == '0')
                  <input type="text" class="form-control" name="t2_cod_origen" id="t2_cod_origen" value="A-1">
              @else
                  <input type="text" class="form-control" name="t2_cod_origen" id="t2_cod_origen" value="{{$form_t2->t2_cod_origen}}"> 
              @endif
              </div>

              <div class="col-md-4 form-group">
                <label for="cod_adquisicion_t2">CÓDIGO DE LA FORMA DE ADQUISICIÓN</label>
                  <select name="cod_adquisicion_t2" id="cod_adquisicion_t2" class="form-control">
                    <option value="{{$form_t2->selectt2->id}}">{{$form_t2->selectt2->opcion}}</option>
                      @foreach($migselectT2 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
                </select>
              </div>
            
              <div class="col-md-4">
                <label for="nom_concurso_t2">NOMBRE DE CONCURSO</label>
              @if($form_t2->nom_concurso_t2 == '1')
                  <input type="text" class="form-control" name="nom_concurso_t2" id="nom_concurso_t2" value="XXX">
           
              @else
                  <input type="text" class="form-control" name="nom_concurso_t2" id="nom_concurso_t2" value="{{$form_t2->nom_concurso_t2}}">
              @endif
              </div>
          </div>

        <!--FIN DEL PRIMER ROW DE INPUT-->

          <div class="row">
              <div class="col-md-4">
                <label for="n_concurso_t2">NÚMERO DE CONCURSO</label>
            @if($form_t2->n_concurso_t2 == '0')
                  <input type="text" class="form-control" name="n_concurso_t2" id="n_concurso_t2" value="XXX">
              
            @else
                  <input type="text" class="form-control" name="n_concurso_t2" id="n_concurso_t2" value="{{$form_t2->n_concurso_t2}}">
            @endif
              </div>

              <div class="col-md-4">
                <label for="cod_proveedor_t2">CÓDIGO DE PROVEEDOR</label>
            @if($form_t2->cod_proveedor_t2 == '0')
                 <input type="text" class="form-control" name="cod_proveedor_t2" id="cod_proveedor_t2" value="XXX">
            @else
                 <input type="text" class="form-control" name="cod_proveedor_t2" id="cod_proveedor_t2" value="{{$form_t2->cod_proveedor_t2}}">
            @endif
              </div>

              <div class="col-md-4">
                <label for="n_contracto_t2">NÚMERO DE CONTRATO</label>
            @if($form_t2->n_contracto_t2 == '0')
                 <input type="text" class="form-control" name="n_contracto_t2" id="n_contracto_t2" value="XXX">
              </div>
            @else
                 <input type="text" class="form-control" name="n_contracto_t2" id="n_contracto_t2" value="{{$form_t2->n_contracto_t2}}">
            @endif
          </div>

        <!--FIN DEL SEGUNDO ROW DE INPUT-->
          <div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-danger" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Guardar Datos</b></button>
                 <a href="{{ url('/registroT2') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
              </div>
          </div>
   
   </form>
  </div>
 </body>
</html>