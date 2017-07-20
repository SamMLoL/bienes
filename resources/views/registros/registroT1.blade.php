@extends('layouts.app')

@section('content')

    <div class="row separar">
        <div class="col-md-12 separar">
            <center><h4><b>REGISTRO DE TABLA ANEXO T-1</b></h4></center>
        </div>
    </div>

  <div class="row">
      <div class="col-md-12">
          <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
              <thead>

                  <tr bgcolor="#8E2121">
                       <td id="letrasb">CÓDIGO DEL PROVEEDOR</td>
                       <td id="letrasb">DESCRIPCIÓN DEL PROVEEDOR</td>
                       <td id="letrasb">TIPO DE PROVEEDOR</td>
                       <td id="letrasb">RIF</td>
                       <td id="letrasb">OTRA DESCRIPCION</td>
                       <td id="letrasb">OPCIÓN</td>
                  </tr>

              </thead>
             <tbody>
                @foreach($verT1 as $registro)
                    @if($registro->otr_descr_t1 == '0')

                  <tr>
                        <!--SI EL REVISADO ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                    @if($registro->revisado == '1')
                      <td><b><a href="seleccion/{{$registro->id}}">(Nuevo <i class="fa fa-eye" aria-hidden="true"></i>) - {{$registro->cod_proveedor_t1}}</a></b></td>
                   
                    @else
                      <td><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
                    @endif

                      <td>{{$registro->desc_prove_t1}}</td>
                      <td>{{$registro->selectt1->opcion}}</td>
                      <td>{{$registro->t1_rif}}</td>
                      <td>XXX</td>
                      <td><b><a href="{{url ('t1/'.$registro->id) }}/edit" title="Modificar"><i class="btn btn-primary fa fa-pencil-square-o" aria-hidden="true"></i></a> <a  class="btn btn-danger fa fa-trash-o" data-toggle="modal" data-target="#EliminarR" title="Eliminar"></a></b></td>
                  </tr>
                    
                    @else
                   
                  <tr>

                      @if($registro->revisado == '1')
                      <td><a href="seleccion/{{$registro->id}}"><b>(Nuevo <i class="fa fa-eye" aria-hidden="true"></i>) {{$registro->cod_proveedor_t1}}</b></a></td>

                    @else
                      <td><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
                    @endif

                      <td>{{$registro->desc_prove_t1}}</td>
                      <td>{{$registro->selectt1->opcion}}</td>
                      <td>{{$registro->t1_rif}}</td>
                      <td>{{$registro->otr_descr_t1}}</td>
                      <td><b><a href="{{url ('t1/'.$registro->id) }}/edit" title="Modificar" ><i class="btn btn-primary fa fa-pencil-square-o" aria-hidden="true"></i></a> <a  class="btn btn-danger fa fa-trash-o" data-toggle="modal" data-target="#EliminarR" title="Eliminar"></a></b></td>
                  </tr>
                    @endif
                @endforeach
             </tbody>
          </table>
              
            <div class="modal fade" id="EliminarR" name="EliminarR" role="dialog" aria-labelledby="ModalLabel" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center><h4 class="modal-title"><b>¿</b><b>Esta seguro que desea eliminar este registro?</b></h4></center>
                        </div>

                        <div class="modal-body">
                          <center>
                            <a href="{{ route('form_t1.destroy', $registro->id) }}" type="button" class="btn btn-danger"  title="Aceptar"  id="BtnEliminar" ><b>Aceptar</b></a>
                            <button id="btnCancelar" name="btnCancelar" type="button" class="btn btn-danger" data-toggle="tooltip" title="Cancelar" data-dismiss="modal"><b>Cancelar</b></button>
                          </center>
                        </div> 
                    </div>                          
                </div>
            </div>
            
      </div>
  </div>
@endsection
