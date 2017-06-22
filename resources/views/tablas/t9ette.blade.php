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
                <div class="panel-heading text-center separar"><h5><b>REGISTRO DE BIENES NACIONALES</b></h5></div>
                
              <div class="row">
                  <div class="col-md-12">
                      <center><h5 for=""><b id="colorletra">DATOS DE ORIGEN Y CLASIFICACION</b></h5></center>
                  </div>
              </div>
               <!--REGISTRO DE BIENES NACIONALES-->

                <div class="row borde">
                   <div class="col-md-4">
                    <div class="form-group">
                       <label for="t9_item">ITEM:</label>
                      <input type="text" name="t9_item" id="t9_item" class="form-control" placeholder="Introduzca el N° de Item">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="">CODIGO DE ORIGEN DEL BIEN:</label>
                     <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="">CODIGO SEGUN CATALOGO:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
                </div>
                
               <!-- Final del 1er Row de origen y clasificación-->

              <div class="row">
                  <div class="col-md-12">
                    <center><h5 for=""><b id="colorletra">DATOS DE UBICACIÓN ADMINISTRATIVA, UBICACIÓN FISICA Y RESPONSABLES</b></h5></center>
                  </div>
              </div>
             
                <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">SEDE DEL ENTE DONDE SE ENCUENTRA EL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CODIGO DEL RESPONSABLE ADMINISTRATIVO:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group ">
                        <label for="">CODIGO DEL RESPONSABLE DEL USO DEL BIEN:</label>
                       <input type="text" name="" class="form-control">
                    </div>  
                  </div>
                </div>
               
                <!-- Final del 2do row con 6 col-md-4 DATOS DE UBICACIÓN ADMINISTRATIVA, UBICACIÓN FISICA Y RESPONSABLES-->
             
                <div class="row">
                  <div class="col-md-12">
                     <center><h5 for=""><b id="colorletra">DATOS BÁSICOS</b></h5></center>
                  </div>
                </div>

                <div class="row borde">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CODIGO INTERNO DEL BIEN:</label>
                     <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ESTATUS DEL USO DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ESPECIFIQUE EL OTRO USO DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">VALOR DE ADQUISICION DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">MONEDA:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
                
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ESPECIFIQUE LA OTRA MONEDA:</label>
                      <input type="text" name="" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">FECHA DE ADQUISICION DEL BIEN:</label>
                     <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">FECHA DE INGRESO DEL BIEN EN EL ENTE:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ESPECIFIQUE EL OTRO ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">DESCRIPCION DEL ESTADO DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
               
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CLASE DEL BIEN:</label>
                      <input type="text" name="" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ESPECIFIQUE LA OTRA CLASE:</label>
                     <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CODIGO DE LA MARCA DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CODIGO MODELO DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">AÑO DE FABRICACION DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="">SERIAL DE CARROCERIA DEL BIEN:</label>
                      <input type="text" class="form-control" name="" placeholder="">
                    </div>
                  </div>
              
                    <div class="col-md-4">
                      <div class="form-group">
                         <label for="">SERIAL DEL MOTOR DEL BIEN:</label>
                        <input type="text" name="" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                         <label for="">PLACAS / SIGLAS DEL BIEN:</label>
                       <input type="text" class="form-control" name="" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="">NUMERO DEL TITULO DE PROPIEDAD:</label>
                        <input type="text" class="form-control" name="" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="">COLOR DEL BIEN:</label>
                        <input type="text" class="form-control" name="" placeholder="">
                      </div>
                    </div>
                
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="">ESPECIFICACION DEL OTRO COLOR:</label>
                        <input type="text" class="form-control" name="" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="">OTRAS ESPECIFICACIONES DE COLOR:</label>
                        <input type="text" class="form-control" name="" placeholder="">
                      </div>
                    </div>
                  </div>
                  <!-- Final del 3to row con 6 col-md-4 DATOS BASICOS-->
                  
                  <div class="row">
                     <div class="col-md-12">
                        <center><h5 for=""><b id="colorletra">DATOS PARTICULARES</b></h5></center>
                     </div>
                  </div>

                   <div class="row borde">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">CAPACIDAD DEL BIEN:</label>
                          <input type="text" name="" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NOMBRE DADO AL BIEN:</label>
                         <input type="text" class="form-control" name="" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">USO DEL BIEN:</label>
                          <input type="text" class="form-control" name="" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESPECIFICACIONES TECNICAS DEL BIEN:</label>
                          <input type="text" class="form-control" name="" placeholder="">
                        </div>
                      </div>
                  
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">OTRAS ESPECIFICACIONES DEL BIEN:</label>
                          <input type="text" class="form-control" name="" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="">GARANTIA:</label>
                          <input type="text" class="form-control" name="" placeholder="">
                        </div>
                      </div>
              
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="">UNIDAD DE MEDIDA DE GARANTIA:</label>
                            <input type="text" name="" class="form-control">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="">FECHA DE INICIO DE GARANTIA:</label>
                           <input type="text" class="form-control" name="" placeholder="">
                          </div>
                        </div>

                         <div class="col-md-4">
                          <div class="form-group">
                              <label for="">FECHA FIN DE GARANTIA:</label>
                           <input type="text" class="form-control" name="" placeholder="">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="">TIENE SISTEMA DE RASTREO INSTALADO EN USO:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="">ESPECIFICACIONES DEL SISTEMA DE RASTREO:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                          </div>
                        </div>
                     </div>
                      <!-- Final del 3to row con 6 col-md-4 DATOS PARTICULARES-->

                    <div class="row">
                        <div class="col-md-12">
                           <center><h5 for=""><b id="colorletra">DATOS DEL SEGURO</b></h5></center>
                        </div>
                    </div>

                       <div class="row borde">
                        <div class="col-md-4">
                          <div class="form-group">
                             <label for="">POSEE COMPONENTES:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                             <label for="">SE ENCUENTRA ASEGURADO EL BIEN:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                          </div>
                        </div>

                         <div class="col-md-4">
                          <div class="form-group">
                             <label for="">CODIGO DEL REGISTRO DEL SEGURO:</label>
                            <input type="text" class="form-control" name="" placeholder="">
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
