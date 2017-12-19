<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Modificar Concurso</title>

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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR COMPRA POR CONCURSO <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t2->id}}</b></h4>
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

      <form role="form" method="POST" action="{{route('concurso.update', $form_t2->id)}}">
          <input type="hidden" name="_method" value="PUT">
              {{ csrf_field() }}

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-4">
                      <label for="codOrigen">Código de Origen</label>
                    @if($form_t2->codOrigen == '0')
                        <input type="text" class="form-control" name="codOrigen" id="codOrigen" value="A-1" maxlength="12"> 
                    @else
                        <input type="text" class="form-control" name="codOrigen" id="codOrigen" value="{{$form_t2->codOrigen}}" maxlength="12"> 
                    @endif
                    </div>

                    <div class="col-md-4 form-group">
                      <label for="codAdquisicion">Código de la Forma de Adquisición</label>
                        <select name="codAdquisicion" id="codAdquisicion" class="form-control">
                          <option value="{{$form_t2->selectConcurso->id}}" disabled>{{$form_t2->selectConcurso->opcion}}</option>
                            @foreach($infoSelect as $form)
                          <option value="{{$form->id}}">{{$form->opcion}}</option> 
                        @endforeach
                      </select>
                    </div>
                
                    <div class="col-md-4">
                      <label for="nomConcurso">Nombre de Concurso</label>
                    @if($form_t2->nomConcurso == '1')
                        <input type="text" class="form-control" name="nomConcurso" id="nomConcurso" value="xxx" maxlength="255">
                 
                    @else
                        <input type="text" class="form-control" name="nomConcurso" id="nomConcurso" value="{{$form_t2->nomConcurso}}" maxlength="255">
                    @endif
                    </div>
                 </div>
              </div>

        <!--FIN DEL PRIMER ROW DE INPUT-->

              <div class="row separar">
                 <div class="col-md-12">
                    <div class="col-md-4">
                      <label for="numConcurso">Número de Concurso</label>
                      @if($form_t2->numConcurso == '0')
                        <input type="text" class="form-control" name="numConcurso" id="numConcurso" value="xxx" maxlength="30">
                    
                      @else
                        <input type="text" class="form-control" name="numConcurso" id="numConcurso" value="{{$form_t2->numConcurso}}" maxlength="30" >
                      @endif
                    </div>

                    <div class="col-md-4">
                      <label for="feConcurso">Fecha de Concurso</label>
                        <input type="text" class="form-control calendario" name="feConcurso" id="feConcurso" value="{{$form_t2->feConcurso}}" maxlength="10">
                    </div>

                    <div class="col-md-4">
                      <label for="codProveedor">Código de Proveedor</label>
                      @if($form_t2->codProveedor == '0')
                       <input type="text" class="form-control" name="codProveedor" id="codProveedor" value="xxx" maxlength="10">
                      @else
                       <input type="text" class="form-control" name="codProveedor" id="codProveedor" value="{{$form_t2->codProveedor}}" maxlength="10">
                      @endif
                    </div>
                 </div>
              </div>

              <div class="row separar">
                 <div class="col-md-12">
                    <div class="col-md-4">
                      <label for="numContrato">Número de Contrato</label>
                      @if($form_t2->numContrato == '0')
                           <input type="text" class="form-control" name="numContrato" id="numContrato" value="xxx" maxlength="30">
                       
                      @else
                           <input type="text" class="form-control" name="numContrato" id="numContrato" value="{{$form_t2->numContrato}}" maxlength="30">
                      @endif
                    </div>

                 <div class="col-md-4">
                    <label for="feContrato">Fecha de Contrato</label>
                      <input type="text" class="form-control calendario" name="feContrato" id="feContrato" value="{{$form_t2->feContrato}}" maxlength="10">
                 </div>
                  
                 <div class="col-md-4">
                    <label for="numNotaEntre">Número Nota de Entrega</label>
                      @if($form_t2->numNotaEntre == '0')
                           <input type="text" class="form-control" name="numNotaEntre" id="numNotaEntre" value="xxx" maxlength="30">
                       
                      @else
                           <input type="text" class="form-control" name="numNotaEntre" id="numNotaEntre" value="{{$form_t2->numNotaEntre}}" maxlength="30">
                      @endif
                 </div>
               </div>
            </div>

            <div class="row separar">
               <div class="col-md-12">
                  <div class="col-md-4">
                    <label for="feNotaEntre">Fecha Nota de Entrega</label>
                      <input type="text" class="form-control calendario" name="feNotaEntre" id="feNotaEntre" value="{{$form_t2->feNotaEntre}}" maxlength="10">
                  </div>
                  
                  <div class="col-md-4">
                    <label for="numFactura">Número de Factura</label>
                      @if($form_t2->numFactura == '0')
                           <input type="text" class="form-control" name="numFactura" id="numFactura" value="xxx" maxlength="30">
                       
                      @else
                           <input type="text" class="form-control" name="numFactura" id="numFactura" value="{{$form_t2->numFactura}}" maxlength="30">
                      @endif
                  </div>

                  <div class="col-md-4">
                      <label for="feFactura">Fecha de Factura</label>
                        <input type="text" class="form-control calendario" name="feFactura" id="feFactura" value="{{$form_t2->feFactura}}" maxlength="10">
                  </div>
               </div>
            </div>

        <!--FIN DEL SEGUNDO ROW DE INPUT-->
            <div class="row">
                <div class="col-md-12 form-group"><br>
                  <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                     <a href="{{ url('/regConcurso') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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
