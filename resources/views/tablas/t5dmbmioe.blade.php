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
                      <center><h5 for=""><b id="colorletra">DATOS DE LAS MARCAS DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></center>
                  </div>
                </div>
            
                <div class="row borde">
                   <div class="col-md-4">
                     <div class="form-group">
                        <label for="t5_item">ITEM:</label>
                      <input type="text" name="t5_item" id="t5_item" class="form-control" placeholder="Introduzca el N° de Item">
                     </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cod_marca_t5">CODIGO DE LA MARCA:</label>
                        <input type="text" class="form-control" name="cod_marca_t5" id="cod_marca_t5" placeholder="Introduzca el código de proveedor">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="deno_comer_marca_t5">DENOMINACIÓN COMERCIAL DE LA MARCA:</label>
                      <input type="text" class="form-control" name="deno_comer_marca_t5" id="deno_comer_marca_t5" placeholder="Descripción del proveedor">
                    </div>
                  </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="nom_fabricante_t5">NOMBRE DEL FABRICANTE:</label>
                      <input type="text" class="form-control" name="nom_fabricante_t5" id="nom_fabricante_t5" placeholder="Introduzca el tipo de proveedor">
                    </div>
                  </div>
                </div>
               <!-- DATOS DE LAS MARCAS DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->
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
