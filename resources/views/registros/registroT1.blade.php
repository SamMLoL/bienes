@extends('layouts.app')

@section('content')

    <div class="row separar">
        <div class="col-md-12 separar">
          <center><h4><b>REGISTRO DE TABLA ANEXO T-1</b></h4></center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 desvanecer">
        @if(session()->has('msj'))
            <center><div  class="col-md-12 alert alert-success" role="alert">{{session('msj')}}</div></center>
               @endif

               @if(session()->has('errormsj'))
            <center><div  class="col-md-12 alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
        @endif
        </div>
    </div>    
        
    <div class="row">
      <div class="col-md-12">
        <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
             
              <thead style="font-size:13px;">
                  <tr bgcolor="#8E2121">
                    <td id="letrasb">Código Proveedor</td>
                    <td id="letrasb">Descripción Proveedor</td>
                    <td id="letrasb">Tipo Proveedor</td>
                    <td id="letrasb">Rif</td>
                    <td id="letrasb">Otra Descripción</td>
                  </tr>
              </thead>

          <tbody style="font-size:13px;">
            @foreach($verT1 as $registro)
                @if($registro->otr_descr_t1 == '0')
                    <tr>
                        <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                      @if($registro->revisadot1 == '1')
                        <td><b><a href="seleccion/{{$registro->id}}">Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->cod_proveedor_t1}}</a></b></td>
                     
                      @else
                        <td><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
                      @endif

                        <td>{{$registro->desc_prove_t1}}</td>
                        <td>{{$registro->selectt1->opcion}}</td>
                        <td>{{$registro->t1_rif}}</td>
                        <td>XXX</td>
                      
                    </tr>
                @else
                    <tr>

                      @if($registro->revisadot1 == '1')
                        <td><a href="seleccion/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->cod_proveedor_t1}}</b></a></td>

                      @else
                        <td><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
                      @endif

                        <td>{{$registro->desc_prove_t1}}</td>
                        <td>{{$registro->selectt1->opcion}}</td>
                        <td>{{$registro->t1_rif}}</td>
                        <td>{{$registro->otr_descr_t1}}</td>
                    </tr>
                @endif
            @endforeach
          </tbody>
        </table>
          <!--Modal Eliminar anulart1 -->
        <div class="modal fade" id="EliminarR" name="EliminarR" role="dialog" aria-labelledby="ModalLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"><b>¿</b><b>Esta seguro que desea eliminar este registro?</b></h4></div>
                  <div class="modal-body">
                          
                    <a href="#" type="button" class="btn btn-danger"  title="Aceptar"  id="BtnEliminar" ><b>Aceptar</b></a>
            
                    <button id="btnCancelar" name="btnCancelar" type="button" class="btn btn-danger" data-toggle="tooltip" title="Cancelar" data-dismiss="modal"><b>Cancelar</b></button>
              </div> 
            </div>                          
          </div>
        </div>
      </div>
    </div>
@endsection
