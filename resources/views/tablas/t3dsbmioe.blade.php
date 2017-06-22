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
                      <center><h5 for=""><b id="colorletra">DATOS DEL SEGURO DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></center>
                  </div>
                </div>

                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t3_item">ITEM:</label>
                      <input type="text" name="t3_item" id="t3_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_registro_t3">CODIGO DE REGISTRO:</label>
                     <input type="text" class="form-control" name="cod_registro_t3" id="cod_registro_t3" placeholder="Introduzca el código de registro">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="comp_aseguradora_t3">COMPAÑIA ASEGURADORA:</label>
                      <input type="text" class="form-control" name="comp_aseguradora_t3" id="comp_aseguradora_t3" placeholder="Introduzca la compañia aseguradora">
                    </div>
                  </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="otra_comp_ase_t3">OTRA COMPAÑIA ASEGURADORA:</label>
                      <input type="text" class="form-control" name="otra_comp_ase_t3" id="otra_comp_ase_t3" placeholder="Introduzca otra compañia aseguradora">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="n_poliza_t3">NÚMERO DE POLIZA:</label>
                      <input type="text" class="form-control" name="n_poliza_t3" id="n_poliza_t3" placeholder="Introduzca el N° de poliza">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="tip_poliza_t3">TIPO DE POLIZA:</label>
                      <input type="text" class="form-control" name="tip_poliza_t3" id="tip_poliza_t3" placeholder="Introduzca el tipo de poliza">
                    </div>
                  </div>
                </div>
               <hr>
               <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="monto_asegurado_t3">MONTO ASEGURADO:</label>
                      <input type="text" name="monto_asegurado_t3" id="monto_asegurado_t3" class="form-control" placeholder="Introduzca el monto asegurado">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="moneda_t3">MONEDA:</label>
                     <input type="text" class="form-control" name="moneda_t3" id="moneda_t3" placeholder="Indique la moneda">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="espe_moneda_t3">ESPECIFIQUE LA MONEDA:</label>
                      <input type="text" class="form-control" name="espe_moneda_t3" id="espe_moneda_t3" placeholder="Describa la moneda">
                    </div>
                  </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_ini_poliza_t3">FECHA DE INICIO DE LA POLIZA:</label>
                      <input type="date" class="form-control" name="fe_ini_poliza_t3" id="fe_ini_poliza_t3">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_fin_poliza_t3">FECHA FIN DE LA POLIZA:</label>
                      <input type="date" class="form-control" name="fe_fin_poliza_t3" id="fe_fin_poliza_t3">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="respon_civil_t3">POSEE RESPONSABILIDAD CIVIL:</label>
                      <input type="text" class="form-control" name="respon_civil_t3" id="respon_civil_t3" placeholder="indique si posee responsabilidad civil">
                    </div>
                  </div>
              </div>
              <hr>
                 <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="tip_cobertura_t3">TIPO DE COBERTURA DE LA POLIZA:</label>
                      <input type="text" name="tip_cobertura_t3" id="tip_cobertura_t3" class="form-control" placeholder="Introduzca el tipo de cobertura">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="espec_tip_cober_t3">ESPECIFIQUE EL TIPO DE COBERTURA:</label>
                     <input type="text" class="form-control" name="espec_tip_cober_t3" id="espec_tip_cober_t3 " placeholder="Describa el tipo de cobertura">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="desc_cobertura_t3">DESCRIPCIÓN DE LA COBERTURA:</label>
                      <input type="text" class="form-control" name="desc_cobertura_t3" id="desc_cobertura_t3" placeholder="Descripción de la cobertura">
                    </div>
                  </div>
              </div>
              <hr>
                <!--DATOS DEL SEGURO DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->
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
                <hr>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection
