      <div class="modal fade" id="AnularT2" name="AnularT2" role="dialog" aria-labelledby="ModalLabel" aria-hidden="false" >
          <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                        
                      <center><h4 class="modal-title"><b>¿</b>Está seguro que desea eliminar este registro <b>?</b><br> ( <b>N ° de Registro </b><b style="color:red;">#{{$seleccion->id}} </b> )</h4></center>

                    </div>
                  <div class="modal-body">

                       <center>
                       <a href="{{url ('anularConcur/'.$seleccion->id) }}" type="button" class="btn btn-danger"  title="Aceptar"  id="BtnAnular"><b>Aceptar</b></a>

                       <button id="btnCancelar" name="btnCancelar" type="button" class="btn btn-danger" data-toggle="tooltip" title="Cancelar" data-dismiss="modal"><b>Cancelar</b></button>
                       </center>
                  </div> 
              </div>                          
          </div>
      </div>
