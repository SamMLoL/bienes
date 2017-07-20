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
              <div class="panel-heading text-center separar"><h5><b>DATOS DE  LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
                 
              <div class="row">
                  <div class="col-md-12">
                      <center><h5 for=""><b id="colorletra">SEMOVIENTES</b></h5></center>
                  </div>
              </div>

                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t10_item">ITEM:</label>
                      <input type="text" name="t10_item" id="t10_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_origen_bien_t10">CODIGO DE ORIGEN DEL BIEN:</label>
                     <input type="text" class="form-control" name="cod_origen_t10" id="cod_origen_t10" placeholder="Introduzca el código de origen del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="dep_adm_t10">DEPENDENCIA ADMINISTRATIVA:</label>
                      <input type="text" class="form-control" name="dep_adm_t10" id="dep_adm_t10" placeholder="Indique la dependencia administrativa">
                    </div>
                  </div>
                
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="sede_ente_bien_t10">SEDE DEL ENTE DONDE SE ENCUENTRA EL BIEN:</label>
                      <input type="text" class="form-control" name="sede_ente_bien_t10" id="sede_ente_bien_t10" placeholder="Indique el ente del bien">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_respo_adm_t10">CODIGO DEL RESPONSABLE ADMINISTRATIVO:</label>
                      <input type="text" class="form-control" name="cod_respo_adm_t10" id="cod_respo_adm_t10" placeholder="Introduzca código del responsable">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_resp_bien_t10">CODIGO DEL RESPONSABLE DE CUIDO DEL BIEN:</label>
                      <input type="text" class="form-control" name="cod_resp_bien_t10" id="cod_resp_bien_t10" placeholder="Introduzca código del responsable del bien">
                    </div>
                  </div>
                </div>
               <hr>

               <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_interno_bien_t10">CODIGO INTERNO DEL BIEN:</label>
                      <input type="text" name="cod_interno_bien_t10" id="cod_interno_bien_t10" class="form-control" placeholder="Introduzca el código del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="espe_otro_uso_t10">ESPECIFIQUE EL OTRO USO:</label>
                     <input type="text" class="form-control" name="espe_otro_uso_t10" id="espe_otro_uso_t10" id="moneda_t3" placeholder="Describa el otro uso">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="valor_adq_bien_10">VALOR DE  ADQUISICION DEL BIEN:</label>
                      <input type="text" class="form-control" name="valor_adq_bien_10" id="valor_adq_bien_10" placeholder="Describa el valor de adquisición">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="moneda_t10">MONEDA:</label>
                      <input type="text" class="form-control" name="moneda_t10" id="moneda_t10" placeholder="Indique la moneda">
                    </div>
                  </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="espe_otra_moneda_t10">ESPECIFIQUE LA OTRA MONEDA:</label>
                      <input type="text" class="form-control" name="espe_otra_moneda_t10" id="espe_otra_moneda_t10" placeholder="Describa la otra moneda">
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_adq_bien_t10">FECHA DE ADQUISICION DEL BIEN:</label>
                      <input type="date" class="form-control" name="fe_adq_bien_t10" id="fe_adq_bien_t10">
                    </div>
                  </div>
              </div>

              <hr>

                 <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_ing_bien_ente_t10">FECHA DE INGRESO DEL BIEN EN EL ENTE:</label>
                      <input type="date" name="fe_ing_bien_ente_t10" id="fe_ing_bien_ente_t10" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="edo_bien_t10">ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="edo_bien_t10" id="edo_bien_t10" placeholder="Indique del estado del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="espe_otro_edo_bien_t10">ESPECIFIQUE EL OTRO ESTADO DEL BIEN:</label>
                      <input type="text" name="espe_otro_edo_bien_t10" id="espe_otro_edo_bien_t10" class="form-control" placeholder="Describa el otro estado del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="des_edo_bien_t10">DESCRIPCION DEL ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="des_edo_bien_t10" id="des_edo_bien_t10" placeholder="Descripción del estado del bien">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="raza_t10">RAZA:</label>
                      <input type="text" name="raza_t10" id="raza_t10" class="form-control" placeholder="Indique la raza">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="genero_t10">GENERO:</label>
                      <input type="text" class="form-control" name="genero_t10" id="genero_t10" placeholder="Indique el genero">
                    </div>
                  </div>
                </div>

                <!--final del row borde-->

                <div class="row borde">
                 
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="animal_t10">TIPO ANIMAL:</label>
                      <input type="text" class="form-control" name="animal_t10" id="animal_t10" placeholder="Indique el tipo animal">
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="esp_otro_tipo_t10">ESPECIFIQUE OTRO TIPO:</label>
                      <input type="text" class="form-control" name="esp_otro_tipo_t10" id="esp_otro_tipo_t10" placeholder="Indique otro tipo animal">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="proposito_t10">PROPOPOSITO:</label>
                      <input type="text" class="form-control" name="proposito_t10" id="proposito_t10" placeholder="Describa el proposito">
                    </div>
                  </div>
             
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="esp_proposito_t10">ESPECIFIQUE EL OTRO PROPOSITO:</label>
                      <input type="text" class="form-control" name="esp_proposito_t10" id="esp_proposito_t10" placeholder="Describa otro proposito">
                    </div>
                  </div>

                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="color_bien_10">COLOR DEL BIEN:</label>
                      <input type="text" class="form-control" name="color_bien_10" id="color_bien_10" placeholder="Indique el color del bien">
                     </div>
                   </div>

                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="esp_proposito_t10">ESPECIFICACION DEL OTRO COLOR:</label>
                      <input type="text" class="form-control" name="esp_proposito_t10" id="esp_proposito_t10" placeholder="Describa otro color">
                     </div>
                  </div>
                </div>
               
               <!--FINAL ROW-->

                <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="otras_espe_color_t10">OTRAS ESPECIFICACIONES DEL COLOR:</label>
                      <input type="text" class="form-control" name="otras_espe_color_t10" id="otras_espe_color_t10" placeholder="Especifique otro color">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="peso_t10">PESO:</label>
                      <input type="text" class="form-control" name="peso_t10" id="peso_t10" placeholder="Indique el peso">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="unidad_md_pesp_t10">UNIDAD DE MEDIDA DE PESO:</label>
                      <input type="text" class="form-control" name="unidad_md_pesp_t10" id="unidad_md_pesp_t10" placeholder="Indique la unidad de medida">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="fe_nacimiento_t10">FECHA DE NACIMIENTO:</label>
                      <input type="date" class="form-control" name="fe_nacimiento_t10" id="fe_nacimiento_t10">
                    </div>
                  </div>

                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="nu_hierro_t10">NUMERO DE HIERRO:</label>
                      <input type="text" class="form-control" name="nu_hierro_t10" id="nu_hierro_t10" placeholder="Introduzca el numero de hierro">
                     </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="señas_partic_t10">SEÑAS PARTICULARES:</label>
                      <input type="text" class="form-control" name="señas_partic_t10" id="señas_partic_t10" placeholder="Describa señas particulares">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="asegurado_bien_t10">SE ENCUENTRA ASEGURADO EL BIEN:</label>
                      <input type="text" class="form-control" name="asegurado_bien_t10" id="asegurado_bien_t10" placeholder="Describa el bien si se encuentra asegurado">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="cod_reg_seg_t10">CODIGO DEL REGISTRO DE SEGURO:</label>
                      <input type="text" class="form-control" name="cod_reg_seg_t10" id="cod_reg_seg_t10" placeholder="Describa otro proposito">
                    </div>
                  </div>
                </div>
              
               <!--FINAL DEL ROW-->
              
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
