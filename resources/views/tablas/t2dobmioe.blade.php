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
                      <center><h5 for=""><b id="colorletra">DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></center>
                  </div>
              </div>
               <!--DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->
                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t2_item">ITEM:</label>
                      <input type="text" name="t2_item" id="t2_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_adquisicion_t2">CODIGO DE LA FORMA DE ADQUISICION:</label>
                     <input type="text" class="form-control" name="cod_adquisicion_t2" id="cod_adquisicion_t2" placeholder="Introduzca el código de origen">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="nom_concurso_t2">NOMBRE DE CONCURSO:</label>
                      <input type="text" class="form-control" name="nom_concurso_t2" id="nom_concurso_t2" placeholder="Introduzca el nombre del concurso">
                    </div>
                  </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="n_concurso_t2">NÚMERO DE CONCURSO:</label>
                      <input type="text" class="form-control" name="n_concurso_t2" id="n_concurso_t2" placeholder="Introduzca el nombre del concurso">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_concurso_t2">FECHA DE CONCURSO:</label>
                      <input type="date" class="form-control" name="fe_concurso_t2" id="fe_concurso_t2">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_proveedor_t2">CÓDIGO DE PROVEEDOR:</label>
                      <input type="text" class="form-control" name="cod_proveedor_t2" id="cod_proveedor_t2" placeholder="Introduzca el código del proveedor">
                    </div>
                  </div>
                </div>

               <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="n_contracto_t2">NÚMERO DE CONTRATO:</label>
                      <input type="text" name="n_contracto_t2" id="n_contracto_t2" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_contracto_t2">FECHA DEL CONTRATO:</label>
                     <input type="date" class="form-control" name="fe_contracto_t2" id="fe_contracto_t2">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="n_notaentrega_t2">NÚMERO DE LA NOTA DE ENTREGA:</label>
                      <input type="text" class="form-control" name="n_notaentrega_t2" id="n_notaentrega_t2" placeholder="Introduzca el número de la nota de entrega">
                    </div>
                  </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_nota_entrega_t2">FECHA DE LA NOTA DE  ENTREGA:</label>
                      <input type="date" class="form-control" name="fe_nota_entrega_t2" id="fe_nota_entrega_t2">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="n_factura_t2">NÚMERO DE LA FACTURA:</label>
                      <input type="text" class="form-control" name="n_factura_t2" id="n_factura_t2" placeholder="Introduzca el N° de rif">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_factura_t2">FECHA DE LA FACTURA:</label>
                      <input type="date" class="form-control" name="fe_factura_t2" id="fe_factura_t2" placeholder="Introduzca el código del proveedor">
                    </div>
                  </div>
              </div>
              <hr>
              <!--DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->
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
</div>
@endsection
