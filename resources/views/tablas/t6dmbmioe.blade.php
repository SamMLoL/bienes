@extends('layouts.app')

@section('content')

<div class="container" id="sha">
    <div class="row ">
       <div class="col-md-12 " >
           <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" >
       </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="row">
                  <div class="col-md-12">
                      <center><h5 for=""><b id="colorletra">DATOS DE LOS MODELOS DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></center>
                  </div>
                </div>
            
                <div class="row borde">
                   <div class="col-md-4">
                     <div class="form-group">
                        <label for="t6_item">ITEM:</label>
                      <input type="text" class="form-control" name="t6_item" id="t6_item"  placeholder="Introduzca el N° de Item">
                     </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cod_modelo_t6">CÓDIGO DEL MODELO:</label>
                        <input type="text" class="form-control" name="cod_modelo_t6" id="cod_modelo_t6" placeholder="Introduzca el código del modelo">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="deno_modelo_fabri_t6">DENOMINACIÓN DEL MODELO (FABRICANTE):</label>
                      <input type="text" class="form-control" name="deno_modelo_fabri_t6" id="deno_modelo_fabri_t6" placeholder="Descripción del modelo según el fabricante">
                    </div>
                  </div>
                
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_marca_t6">CODIGO DE LA MARCA:</label>
                      <input type="text" class="form-control" name="cod_marca_t6" id="cod_marca_t6" placeholder="Introduzca el código de la marca">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_bien_model_t6">CÓDIGO QUE PUEDE APLICAR EL MODELO:</label>
                      <input type="text" class="form-control" name="cod_bien_model_t6" id="cod_bien_model_t6" placeholder="Código del bien mueble segun el catálogo">
                    </div>
                  </div>
                </div>
               <!-- DATOS DE LOS MODELOS DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->
              </div>
                 <hr>
                  <div class="row">
                      <div class="col-md-12" ><br>
                         <div class="form-group">
                           <center>
                            <a type="submit" class="btn btn-lg btn-danger" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</a>
                           
                           <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                           </center> 
                       </div>
                     </div>
                   </div>
            </div>
        </div>
    </div>
</div>
@endsection
