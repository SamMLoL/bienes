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
                      <center><h5 for=""><b id="colorletra">DATOS DE LOS PROVEEDORES DE LOS BIENES PÚBLICOS DEL ÓRGANO O ENTE</b></h5></center>
                  </div>
              </div>
             
                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t1_item">ITEM:</label>
                      <input type="text" name="t1_item" id="t1_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_proveedor_t1">CODIGO DEL PROVEEDOR:</label>
                     <input type="text" class="form-control" name="cod_proveedor_t1" id="cod_proveedor_t1" placeholder="Introduzca el código de proveedor">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="desc_prove_t1">DESCRIPCION DEL PROVEEDOR:</label>
                      <input type="text" class="form-control" name="desc_prove_t1" id="desc_prove_t1" placeholder="Descripción del proveedor">
                    </div>
                  </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="tip_prove_t1">TIPO DE PROVEEDOR:</label>
                      <input type="text" class="form-control" name="tip_prove_t1" id="tip_prove_t1" placeholder="Introduzca el tipo de proveedor">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="t1_rif">RIF:</label>
                      <input type="text" class="form-control" name="t1_rif" id="t1_rif" placeholder="Introduzca el N° de rif">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="otr_descr_t1">OTRA DESCRIPCION:</label>
                      <input type="text" class="form-control" name="otr_descr_t1" id="otr_descr_t1" placeholder="Descripción adicional">
                    </div>
                  </div>
                </div>
            </div>
                <hr>
                  <!--DATOS DE LOS PROVEEDORES DE LOS BIENES PÚBLICOS DEL ÓRGANO O ENTE-->
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
