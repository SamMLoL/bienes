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
                      <center><h5 for=""><b id="colorletra">INVENTARIO DE COORDINACIÓN DE COMPRAS</b></h5></center>
                  </div>
              </div>
             
                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="num_bien_inv1">N° DE BIEN:</label>
                      <input type="text" class="form-control" name="num_bien_inv1" id="num_bien_inv1"  placeholder="Introduzca el N° de bienes">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="nom_desc_bienes_inv1">NOMBRE Y DESCRIPCIÓN DE LOS BIENES:</label>
                     <input type="text" class="form-control" name="nom_desc_bienes_inv1" id="nom_desc_bienes_inv1" placeholder="Introduzca la descripción de bienes">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="marca_inv1">MARCA:</label>
                      <input type="text" class="form-control" name="marca_inv1" id="marca_inv1" placeholder="Describa la marca">
                    </div>
                  </div>
                </div>

                <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="modelo_inv1">MODELO:</label>
                      <input type="text" class="form-control" name="modelo_inv1" id="modelo_inv1" placeholder="Describa el modelo">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="serial_inv1">SERIAL:</label>
                      <input type="text" class="form-control" name="serial_inv1" id="serial_inv1" placeholder="Introduzca el N° de serial">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="color_inv1">COLOR:</label>
                      <input type="text" class="form-control" name="color_inv1" id="color_inv1" placeholder="Descripción del color ">
                    </div>
                  </div>
                </div>

                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="valor_unitario_inv1">VALOR UNITARIO Bs.</label>
                      <input type="text" class="form-control" name="valor_unitario_inv1" id="valor_unitario_inv1" placeholder="Introduzca el valor unitario ">
                    </div>
                   </div>

                    <div class="col-md-4">
                     <div class="form-group">
                        <label for="usuario_inv1">USUARIO:</label>
                       <input type="text" class="form-control" name="usuario_inv1" id="usuario_inv1" placeholder="Introduzca el valor unitario ">
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
                            <a type="submit" class="btn btn-lg btn-danger" name="#" ><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</a>
                           
                            <a href="home"  class="btn btn-lg btn-danger"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                           </center> 
                       </div>
                     </div>
                   </div>

            </div>
        </div>
    </div>
</div>
@endsection
