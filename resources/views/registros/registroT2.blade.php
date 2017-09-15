@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>Registro de Anexo T-2</b></h4></center>
      </div>
  </div>

      <div class="row">
        <div class="col-md-12">
          <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
              
                <thead style="font-size:12px;">
                    <tr>
                       <td id="letrasb" class="text-center">Código Origen</td>
                       <td id="letrasb" class="text-center">Código Adquisición</td>
                       <td id="letrasb" class="text-center">Nombre Concurso</td>
                       <td id="letrasb" class="text-center">Número Concurso</td>
                       <td id="letrasb" class="text-center">Fecha Concurso</td>
                       <td id="letrasb" class="text-center">Código Proveedor</td>
                       <td id="letrasb" class="text-center">Número Contrato</td>
                       <td id="letrasb" class="text-center">Fecha Contrato</td>
                       <td id="letrasb" class="text-center">Número Nota Entrega</td>
                       <td id="letrasb" class="text-center">Fecha Nota Entrega</td>
                       <td id="letrasb" class="text-center">Número Factura</td>
                       <td id="letrasb" class="text-center">Fecha Factura</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
              @foreach($verT2 as $registro2)
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                  @if($registro2->t2_cod_origen == '0')
                    <tr>
                        @if($registro2->revisadot2 == '1')
                          <td class="text-center"><a href="seleccion2/{{$registro2->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> A-1</b></a></td>

                        @else
                          <td class="text-center"><a href="seleccion2/{{$registro2->id}}">A-1</a></td>
                        @endif
                        
                  @else

                        @if($registro2->revisadot2 == '1')
                           <td class="text-center"><a href="seleccion2/{{$registro2->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro2->t2_cod_origen}}</b></a></td>
                        @else
                           <td class="text-center"><a href="seleccion2/{{$registro2->id}}">{{$registro2->t2_cod_origen}}</a></td>
                        @endif

                  @endif

                           <td class="text-center"><a href="#" hidden>{{$registro2->id}}</a>{{$registro2->selectT2->opcion}}</td>

                        @if($registro2->nom_concurso_t2 == '1')
                           <td class="text-center">XXX</td>
                        @else
                           <td class="text-center">{{$registro2->nom_concurso_t2}}</td>
                        @endif

                        @if($registro2->n_concurso_t2 == '0')
                           <td class="text-center">XXX</td>
                        @else
                           <td class="text-center">{{$registro2->n_concurso_t2}}</td>
                        @endif

                        @if($registro2->fe_concurso_t2 == '1111-11-11')
                           <td class="text-center">11111111</td>
                        @else
                           <td>{{$registro2->fe_concurso_t2}}</td>
                        @endif

                        @if($registro2->cod_proveedor_t2 == '0')
                           <td class="text-center">XXX</td>
                        @else
                           <td class="text-center">{{$registro2->cod_proveedor_t2}}</td>
                        @endif 
                         
                        @if($registro2->n_contracto_t2 == '0')
                           <td class="text-center">XXX</td>
                        @else
                           <td class="text-center">{{$registro2->n_contracto_t2}}</td>
                        @endif

                        @if($registro2->fe_contracto_t2 == '1111-11-11')
                           <td class="text-center">11111111</td>
                        @else
                           <td class="text-center">{{$registro2->fe_contracto_t2}}</td>
                        @endif
                
                        @if($registro2->n_notaentrega_t2 == '0')
                           <td class="text-center">XXX</td>
                        @else
                           <td class="text-center">{{$registro2->n_notaentrega_t2}}</td>
                        @endif

                        @if($registro2->fe_nota_entrega_t2 == '1111-11-11')
                           <td class="text-center">11111111</td>
                        @else
                           <td class="text-center">{{$registro2->fe_nota_entrega_t2}}</td>
                        @endif

                        @if($registro2->n_factura_t2 == '0')
                           <td class="text-center">XXX</td>
                        @else
                           <td class="text-center">{{$registro2->n_factura_t2}}</td>
                        @endif 
                      
                        @if($registro2->fe_factura_t2 == '1111-11-11')
                           <td class="text-center">11111111</td> 
                        @else
                           <td class="text-center">{{$registro2->fe_factura_t2}}</td>
                        @endif
                           <td class="text-center"><a href="seleccion2/{{$registro2->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                    </tr>
              @endforeach
           </tbody>
        </table>

@endsection
