    <div class="modal fade" id="AnularT6" name="AnularT6" role="dialog" aria-labelledby="ModalLabel" aria-hidden="false" >
          <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                        
                      <center><h4 class="modal-title"><b>¿</b>Está seguro que desea eliminar este modelo : <b style="color:red;">  N ° #{{$seleccion->id}} </b> <b>?</b></h4></center>

                    </div>
                  <div class="modal-body">

                       <center>
                       <a href="{{route('modelos.destroy', $seleccion->id)}}" type="button" class="btn btn-danger"  title="Aceptar"  id="BtnAnular"><b>Aceptar</b></a>

                       <button id="btnCancelar" name="btnCancelar" type="button" class="btn btn-danger" data-toggle="tooltip" title="Cancelar" data-dismiss="modal"><b>Cancelar</b></button>
                       </center>
                  </div> 
              </div>                          
          </div>
    </div>
