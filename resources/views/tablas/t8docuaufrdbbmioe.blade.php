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
                <div class="panel-heading text-center separar"><h5><b>DATOS DE ORIGEN Y CLASIFICACIÓN DATOS DE UBICACIÓN ADMINISTRATIVA, UBICACIÓN FISICA, RESPONSABLES Y DATOS BASICOS DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
           
               <!--DATOS DE ORIGEN Y CLASIFICACIÓN DATOS DE UBICACIÓN ADMINISTRATIVA, UBICACIÓN FISICA, RESPONSABLES Y DATOS BASICOS DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE-->

                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t8_item">ITEM:</label>
                      <input type="text" name="t8_item" id="t8_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_origen_bien_t8">CODIGO DE ORIGEN DEL BIEN:</label>
                     <input type="text" class="form-control" name="cod_origen_bien_t8" id="cod_origen_bien_t8" placeholder="Introduzca el código de origen del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_segun_catalogo_t8">CODIGO SEGUN CATALOGO:</label>
                      <input type="text" class="form-control" name="cod_segun_catalogo_t8" id="cod_segun_catalogo_t8" placeholder="Introduzca el código según el catálogo">
                    </div>
                  </div>
                </div>
                
               <!-- Final del 1er Row de origen y clasificación-->
            
                <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="sede_organo_bien_t8">SEDE DEL ENTE DONDE SE ENCUENTRA EL BIEN:</label>
                      <input type="text" class="form-control" name="sede_organo_bien_t8" id="sede_organo_bien_t8" placeholder="Indique la sede del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="cod_respon_adm_t8">CODIGO DEL RESPONSABLE ADMINISTRATIVO:</label>
                      <input type="text" class="form-control" name="cod_respon_adm_t8" id="cod_respon_adm_t8" placeholder="Introduzca el responsable">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group ">
                        <label for="cod_respon_direc_bien_t8">CODIGO DEL RESPONSABLE DIRECTO DEL BIEN:</label>
                       <input type="text" name="cod_respon_direc_bien_t8" id="cod_respon_direc_bien_t8" class="form-control" placeholder="introduzca el código del responsable directo">
                    </div>  
                  </div>
                </div>
               
                <!-- Final del 2do row con 6 col-md-4 -->
             
                <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="cod_inter_bien_t8">CODIGO INTERNO DEL BIEN:</label>
                     <input type="text" class="form-control" name="cod_inter_bien_t8" id="cod_inter_bien_t8" placeholder="Introduzca el código interno del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="estatus_uso_bien_t8">ESTATUS DEL USO DEL BIEN:</label>
                      <input type="text" class="form-control" name="estatus_uso_bien_t8" id="estatus_uso_bien_t8" placeholder="Indique el estatus del uso del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="espe_otro_uso_t8">ESPECIFIQUE EL OTRO USO:</label>
                      <input type="text" class="form-control" name="espe_otro_uso_t8" id="espe_otro_uso_t8" placeholder="Describa el uso del bien">
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_adq_bien_t8">VALOR DE ADQUISICION DEL BIEN:</label>
                      <input type="text" class="form-control" name="valor_adq_bien_t8" id="valor_adq_bien_t8" placeholder="Indique el valor de adquisición del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="moneda_t8">MONEDA:</label>
                      <input type="text" class="form-control" name="moneda_t8" id="moneda_t8" placeholder="Indique la moneda">
                    </div>
                  </div>
                
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="espe_otra_moneda_t8">ESPECIFIQUE LA OTRA MONEDA:</label>
                      <input type="text" name="espe_otra_moneda_t8" id="espe_otra_moneda_t8" class="form-control" placeholder="Describa la otra moneda">
                    </div>
                  </div>
                 </div>

                 <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="fe_adq_bien_t8">FECHA DE ADQUISICION DEL BIEN:</label>
                     <input type="date" class="form-control" name="fe_adq_bien_t8" id="fe_adq_bien_t8">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="fe_ing_bien_ente_t8">FECHA DE INGRESO DEL BIEN EN EL ENTE:</label>
                      <input type="date" class="form-control" name="fe_ing_bien_ente_t8" id="fe_ing_bien_ente_t8">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="edo_bien_t8">ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="edo_bien_t8" id="edo_bien_t8" placeholder="Especifique el estado el bien">
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="esp_otro_edo_bien_t8">ESPECIFIQUE EL OTRO ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="esp_otro_edo_bien_t8" id="esp_otro_edo_bien_t8" placeholder="Especifique el otro estado del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="desc_edo_bien_t8">DESCRIPCION DEL ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="desc_edo_bien_t8" id="desc_edo_bien_t8" placeholder="Describa el estado del bien">
                    </div>
                  </div>
               
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="serial_bien_t8">SERIAL DEL BIEN:</label>
                      <input type="text" name="serial_bien_t8" id="serial_bien_t8" class="form-control" placeholder="Introduzca el serial del bien">
                    </div>
                  </div>
                 </div>

                 <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CODIGO DE LA MARCA DEL BIEN:</label>
                     <input type="text" class="form-control" name="" placeholder="Introduzca el código de la marca del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="cod_modelo_bien_t8">CODIGO MODELO DEL BIEN:</label>
                      <input type="text" class="form-control" name="cod_modelo_bien_t8" id="cod_modelo_bien_t8" placeholder="Introduzcal el modelo del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="año_fab_bien_t8">AÑO DE FABRICACIÓN DEL BIEN:</label>
                      <input type="text" class="form-control" name="año_fab_bien_t8" id="año_fab_bien_t8" placeholder="Indique el año de fabricación del bien">
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="espe_color_t8">ESPECIFICACIÓN DE COLOR:</label>
                      <input type="text" class="form-control" name="espe_color_t8" id="espe_color_t8" placeholder="Describa el color">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="otras_espe_color_t8">OTRAS ESPECIFICACIONES DE COLOR:</label>
                      <input type="text" class="form-control" name="otras_espe_color_t8" id="otras_espe_color_t8" placeholder="Describa otras especificaciones">
                    </div>
                  </div>
              
                    <div class="col-md-4">
                      <div class="form-group">
                         <label for="espe_tecn_bien_t8">ESPECIFICACIONES TECNICAS DEL BIEN:</label>
                        <input type="text" name="espe_tecn_bien_t8" id="espe_tecn_bien_t8" class="form-control" placeholder="Describa técnicas del bien">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                         <label for="otras_espe_bien_t8">OTRAS ESPECIFICACIONES DEL BIEN:</label>
                       <input type="text" class="form-control" name="otras_espe_bien_t8" id="otras_espe_bien_t8" placeholder="Describa otras del bien">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="garantia_t8">GARANTIA:</label>
                        <input type="text" class="form-control" name="garantia_t8" id="garantia_t8" placeholder="Especifique la garantía">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="uni_medi_garantia_t8">UNIDAD DE MEDIDA DE LA GARANTIA:</label>
                        <input type="text" class="form-control" name="uni_medi_garantia_t8" id="uni_medi_garantia_t8" placeholder="Describa la medida de garantía">
                      </div>
                    </div>
                  </div>
                  <!-- Final del 3to row con 6 col-md-4 DATOS BASICOS-->
                
                   <div class="row borde">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">POSEE COMPONENTES:</label>
                          <input type="text" name="" class="form-control" placeholder="Indique si posee componentes">
                        </div>
                      </div>

                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="aseg_bien_t8">SE ENCUENTRA ASEGURADO EL BIEN:</label>
                            <input type="text" class="form-control" name="aseg_bien_t8" id="aseg_bien_t8" placeholder="Describa el asegurado del bien">
                          </div>
                        </div>
                    
                     
                      <!-- Final del 3to row con 6 col-md-4 DATOS PARTICULARES-->

                        <div class="col-md-4">
                          <div class="form-group">
                             <label for="cod_reg_seguro_t8">CODIGO DEL REGISTRO DE SEGURO:</label>
                            <input type="text" class="form-control" name="cod_reg_seguro_t8" id="cod_reg_seguro_t8" placeholder="Introduzca el código del seguro">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="fe_ini_garantia_t8">FECHA DE INICIO DE LA GARANTIA:</label>
                          <input type="date" class="form-control" name="fe_ini_garantia_t8" id="fe_ini_garantia_t8">
                         </div>
                       </div>

                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="fe_fin_garantia_t8">FECHA FIN DE LA GARANTIA:</label>
                            <input type="date" class="form-control" name="fe_fin_garantia_t8" id="fe_fin_garantia_t8">
                          </div>
                        </div>
                    </div>
                      <!-- Final del 6to row con 6 col-md-4-->
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
</div>
@endsection
