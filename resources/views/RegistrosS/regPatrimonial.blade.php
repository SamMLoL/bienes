@extends('layouts.app')

@section('content')

 <div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12">
              <center><h4><b>Datos del Responsable Patrimonial del Órgano o Ente</b></h4></center>
            </div>
        </div>
    <hr>
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
 
        <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
             
              <thead style="font-size:12px;">
                  <tr>
                    <th id="letrasb" class="text-center">Cédula</th>
                    <th id="letrasb" class="text-center">Nombre</th>
                    <th id="letrasb" class="text-center">Apellido</th>
                    <th id="letrasb" class="text-center">Teléfono</th>
                    <th id="letrasb" class="text-center">Cargo</th>
                    <th id="letrasb" class="text-center">Correo Electrónico</th>
                    <th id="letrasb" class="text-center">Número de Gaceta</th>
                    <th id="letrasb" class="text-center">Fecha de Gaceta</th>
                    <th id="letrasb" class="text-center">Número Resolución ó Decreto</th>
                    <th id="letrasb" class="text-center">Fecha Resolución ó Decreto</th>
                    <th id="letrasb" class="text-center">Ver más</th>
                  </tr>
              </thead>
     
          <tbody style="font-size:12px;">
            @foreach($verS3 as $registro)
                
                @if($registro->cedula == '1') 
                  <tr>
                        @if($registro->revisadoS3 == '1')
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionPatrimonial/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> xxx</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionPatrimonial/{{$registro->id}}"> xxx</a> </td>
                        @endif
                @else
                        @if($registro->revisadoS3 == '1')
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionPatrimonial/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->cedula}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionPatrimonial/{{$registro->id}}">{{$registro->cedula}}</a></td>
                        @endif
                @endif

                        @if($registro->nombre == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->nombre}}</td>
                        @endif
                        
                        @if($registro->apellido == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->apellido}}</td>
                        @endif
                        
                        @if($registro->telefono == '0')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->telefono}}</td>
                        @endif

                        @if($registro->cargo == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->cargo}}</td>
                        @endif

                        @if($registro->correo == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->correo}}</td>
                        @endif

                        @if($registro->numGaceta == '0')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->numGaceta}}</td>
                        @endif

                        @if($registro->feGaceta == '1111-11-11')
                        <td class="text-center">11111111</td>
                        @else
                        <td class="text-center">{{$registro->feGaceta}}</td>
                        @endif

                        @if($registro->numDecre == '0')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->numDecre}}</td>
                        @endif

                        @if($registro->feDecre == '1111-11-11')
                        <td class="text-center">11111111</td>
                        @else
                        <td class="text-center">{{$registro->feDecre}}</td>
                        @endif
                  
                        <td class="text-center"><a href="seleccionPatrimonial/{{$registro->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                       
                    </tr>
             
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
      
@endsection
