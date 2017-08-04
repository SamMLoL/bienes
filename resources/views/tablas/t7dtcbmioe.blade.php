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
                      <center><h5 for=""><b id="colorletra">DATOS DE LOS TIPOS DE COMPONENTES DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></center>
                  </div>
                </div>
            
                <div class="row borde">
                   <div class="col-md-4">
                     <div class="form-group">
                        <label for="t7_item">ITEM:</label>
                      <input type="text" name="t7_item" id="t7_item" class="form-control" placeholder="Introduzca el N° de Item">
                     </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="codigo_t7">CODIGO:</label>
                        <input type="text" class="form-control" name="codigo_t7" id="codigo_t7" placeholder="Introduzca el código del modelo">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="deno_comp_t7">DENOMINACIÓN DEL COMPONENTE:</label>
                      <input type="text" class="form-control" name="deno_comp_t7" id="deno_comp_t7" placeholder="Descripción del modelo según el fabricante">
                    </div>
                  </div>
                
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_mueble_t7">CODIGO QUE PUEDE APLICAR EL TIPO COMPONENTE :</label>
                      <input type="text" class="form-control" name="cod_mueble_t7" id="cod_mueble_t7" placeholder="Código del bien mueble segun el catálogo">
                    </div>
                  </div>
                </div>
               <!--DATOS DE LOS TIPOS DE COMPONENTES DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->
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
