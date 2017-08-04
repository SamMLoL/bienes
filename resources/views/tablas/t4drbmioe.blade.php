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
                      <center><h5 for=""><b id="colorletra">DATOS DE LOS RESPONSABLES DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></center>
                   </div>
                </div>
               <!--Final del row titulo datos de origen y clasificación-->

                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t4_item">ITEM:</label>
                      <input type="text" name="t4_item" id="t4_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_responsable_t4">CODIGO DEL RESPONSABLE:</label>
                     <input type="text" class="form-control" name="cod_responsable_t4" id="cod_responsable_t4" placeholder="Introduzca el código del responsable">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="tip_responsable_t4">TIPO DE RESPONSABLE:</label>
                     <input type="text" class="form-control" name="tip_responsable_t4" id="tip_responsable_t4" placeholder="Introduzca el código del responsable">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cedula_t4">CEDULA DE IDENTIDAD:</label>
                      <input type="text" class="form-control" name="cedula_t4" id="cedula_t4" placeholder="Introduzca la cédula de identidad">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="nom_responsable_t4">NOMBRE DE RESPONSABLE:</label>
                      <input type="text" class="form-control" name="nom_responsable_t4" id="nom_responsable_t4" placeholder="Introduzca el nombre del responsable">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="ape_responsable_t4">APELLIDO DE RESPONSABLE:</label>
                      <input type="date" class="form-control" name="ape_responsable_t4" id="ape_responsable_t4" placeholder="Introduzca el apellido del responsable">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="tlf_responsable_t4">TELEFONO DE RESPONSABLE:</label>
                      <input type="text" class="form-control" name="tlf_responsable_t4" id="tlf_responsable_t4" placeholder="Introduzca el teléfono del responsable">
                    </div>
                  </div>
                </div>
              
               <hr>
               <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="cargo_responsable_t4">CARGO DE RESPONSABLE:</label>
                      <input type="text" name="cargo_responsable_t4" id="cargo_responsable_t4" class="form-control" placeholder="Introduzca el cargo del responsable">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="moneda_t4">CORREO ELECTRONICO DE RESPONSABLE:</label>
                     <input type="text" class="form-control" name="moneda_t4" id="moneda_t4" placeholder="Introduzca el email del responsable">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="espe_moneda_t4">DEPENDENCIA ADMINISTRATIVA :</label>
                      <input type="text" class="form-control" name="espe_moneda_t4" id="espe_moneda_t4" placeholder="Dependencia donde se encuentra el responsable de adscripción">
                    </div>
                  </div>
                <hr>
                </div>
                <!--Final del row titulo datos de origen y clasificación-->
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
