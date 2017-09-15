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
             <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T-1</b></h5></div>
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

    <form role="form" method="POST" action="{{route('t1.update', $form_t1->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

      <div class="row">
         <div class="col-md-4">
             <label for="cod_proveedor_t1">CÓDIGO DEL PROVEEDOR</label>
                <input type="text" class="form-control" name="cod_proveedor_t1" id="cod_proveedor_t1" value="{{$form_t1->cod_proveedor_t1}}"  placeholder="Introduzca nombres" maxlength="30" autofocus> 
         </div>
       
         <div class="col-md-4">
             <label for="desc_prove_t1">DESCRIPCIÓN DEL PROVEEDOR</label>   
                <input type="text" class="form-control" name="desc_prove_t1" id="desc_prove_t1" value="{{$form_t1->desc_prove_t1}}"  placeholder="Introduzca nombres" maxlength="30" autofocus> 
         </div>
      
         <div class="pull-right col-md-4 form-group">
            <label for="tip_prove_t1">TIPO DE PROVEEDOR</label>
               <select name="tip_prove_t1" id="tip_prove_t1" class="form-control">
                    <option value="{{$form_t1->selectt1->id}}">{{$form_t1->selectt1->opcion}}</option>
                  @foreach($migselectT1 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
         </div>
      </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
          <div class="row">
             <div class="col-md-4">
                <label for="t1_rif">INTRODUZCA EL N° RIF J-</label>   
                 <input type="text" class="form-control" name="t1_rif" id="t1_rif" value="{{$form_t1->t1_rif}}"  placeholder="Introduzca nombres" maxlength="30"> 
             </div>

             <div class="col-md-4 separar">
                <label for="otr_descr_t1">DESCRIPCIÓN DEL PROVEEDOR</label>

            @if($form_t1->otr_descr_t1 == '0')
                <input type="text" class="form-control" name="otr_descr_t1" id="otr_descr_t1" value="XXX"  placeholder="Introduzca nombres" maxlength="30"> 
             </div>

              @else
                <input type="text" class="form-control" name="otr_descr_t1" id="otr_descr_t1" value="{{$form_t1->otr_descr_t1}}"  placeholder="Introduzca nombres" maxlength="30"> 
          </div>
            @endif

<!--FIN DEL SEGUNDO ROW DE INPUT-->
          <div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT1') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
              </div>
          </div>
    </div>
   </form>
  </body>
 </html>