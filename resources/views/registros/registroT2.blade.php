@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>REGISTRO DE TABLA ANEXO T-2</b></h4></center>
      </div>
  </div>

      <div class="row">
        <div class="col-md-12">
          <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
              
                <thead style="font-size:13px;">
                    <tr bgcolor="#8E2121">
                       <td id="letrasb">Código Origen</td>
                       <td id="letrasb">Código Adquisición</td>
                       <td id="letrasb">Nombre Concurso</td>
                       <td id="letrasb">Número Concurso</td>
                       <td id="letrasb">Fecha Concurso</td>
                       <td id="letrasb">Código Proveedor</td>
                       <td id="letrasb">Número Contrato</td>
                       <td id="letrasb">Fecha Contrato</td>
                       <td id="letrasb">Número Nota Entrega</td>
                       <td id="letrasb">Fecha Nota Entrega</td>
                       <td id="letrasb">Número Factura</td>
                       <td id="letrasb">Fecha Factura</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
              @foreach($verT2 as $registro2)
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                  @if($registro2->t2_cod_origen == '0')
                    <tr>
                        @if($registro2->revisadot2 == '1')
                          <td><a href="seleccion2/{{$registro2->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> A-1</b></a></td>

                        @else
                          <td><a href="seleccion2/{{$registro2->id}}">A-1</a></td>
                        @endif
                        
                  @else

                        @if($registro2->revisadot2 == '1')
                          <td><a href="seleccion2/{{$registro2->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro2->t2_cod_origen}}</b></a></td>
                        @else
                           <td><a href="seleccion2/{{$registro2->id}}">{{$registro2->t2_cod_origen}}</a></td>
                        @endif

                  @endif

                           <td><a href="#" hidden>{{$registro2->id}}</a>{{$registro2->selectt2->opcion}}</td>

                        @if($registro2->nom_concurso_t2 == '1')
                           <td>XXX</td>
                        @else
                           <td>{{$registro2->nom_concurso_t2}}</td>
                        @endif

                        @if($registro2->n_concurso_t2 == '1')
                           <td>XXX</td>
                        @else
                           <td>{{$registro2->n_concurso_t2}}</td>
                        @endif

                        @if($registro2->fe_concurso_t2 == '1111-11-11')
                           <td>11111111</td>
                        @else
                           <td>{{$registro2->fe_concurso_t2}}</td>
                        @endif

                        @if($registro2->cod_proveedor_t2 == '0')
                           <td>XXX</td>
                        @else
                           <td>{{$registro2->cod_proveedor_t2}}</td>
                        @endif 
                         
                        @if($registro2->n_contracto_t2 == '0')
                           <td>XXX</td>
                        @else
                           <td>{{$registro2->n_contracto_t2}}</td>
                        @endif

                        @if($registro2->fe_contracto_t2 == '1111-11-11')
                           <td>11111111</td>
                        @else
                           <td>{{$registro2->fe_contracto_t2}}</td>
                        @endif
                
                        @if($registro2->n_notaentrega_t2)
                           <td>XXX</td>
                        @else
                           <td>{{$registro2->n_notaentrega_t2}}</td>
                        @endif

                        @if($registro2->fe_nota_entrega_t2 == '1111-11-11')
                           <td>11111111</td>
                        @else
                           <td>{{$registro2->fe_nota_entrega_t2}}</td>
                        @endif

                        @if($registro2->n_factura_t2 == '0')
                           <td>XXX</td>
                        @else
                           <td>{{$registro2->n_factura_t2}}</td>
                        @endif 
                      
                        @if($registro2->fe_factura_t2 == '1111-11-11')
                           <td>11111111</td> 
                        @else
                           <td>{{$registro2->fe_factura_t2}}</td>
                        @endif
                    </tr>
              @endforeach
           </tbody>
        </table>

        <div class="modal fade" id="EliminarR" name="EliminarR" role="dialog" aria-labelledby="ModalLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-center"><b>¿</b><b>Esta seguro que desea eliminar este registro?</b></h4></div>
                 <div class="modal-body">
                    <a href="#" type="button" class="btn btn-danger text-center"  title="Aceptar"  id="BtnEliminar" ><b>Aceptar</b></a>
                  
                    <button id="btnCancelar" name="btnCancelar" type="button" class="btn btn-danger text-center" data-toggle="tooltip" title="Cancelar" data-dismiss="modal"><b>Cancelar</b></button>
                </div>
              </div>                          
            </div>
          </div> 
        </div>
      </div>
@endsection
