@extends('layouts.app')

@section('content')

 <div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12">
              <center><h4><b>Datos Básicos del Órgano o Ente</b></h4></center>
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
                    <th id="letrasb" class="text-center">Código SIGECOF</th>
                    <th id="letrasb" class="text-center">Siglas</th>
                    <th id="letrasb" class="text-center">R.I.F</th>
                    <th id="letrasb" class="text-center">Razón social</th>
                    <th id="letrasb" class="text-center">Teléfono</th>
                    <th id="letrasb" class="text-center">Correo Electrónico</th>
                    <th id="letrasb" class="text-center">Fecha de Gaceta</th>
                    <th id="letrasb" class="text-center">Numero Gaceta</th>
                    <th id="letrasb" class="text-center">Ver más</th>
                  </tr>
              </thead>
     
          <tbody style="font-size:12px;">
            @foreach($verS1 as $registro)
                
                    <tr>
                       
                        @if($registro->revisadoS1 == '1')
                        <td class="text-center"><a href="seleccionBasicos/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->codSigecof}}</b></a></td>
                        @else
                        <td class="text-center"><a href="seleccionBasicos/{{$registro->id}}">{{$registro->codSigecof}}</a></td>
                        @endif
                        
                        @if($registro->siglas == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->siglas}}</td>
                        @endif
                        
                        @if($registro->grupo == '1')
                        <td class="text-center">J-{{$registro->rifProvee}}</td>
                        @elseif($registro->grupo == '2')
                        <td class="text-center">V-{{$registro->rifProvee}}</td>
                        @else
                        <td class="text-center">G-{{$registro->rifProvee}}</td>
                        @endif
                        
                        @if($registro->razonSocial == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->razonSocial}}</td>
                        @endif

                        @if($registro->telfEnte == '0')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->telfEnte}}</td>
                        @endif

                        @if($registro->correEnte == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->correEnte}}</td>
                        @endif

                        @if($registro->feGaceta == '1111-11-11')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->feGaceta}}</td>
                        @endif

                        @if($registro->numGaceta == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->numGaceta}}</td>
                        @endif
                  
                        <td class="text-center"><a href="seleccionBasicos/{{$registro->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                       
                    </tr>
             
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
      
@endsection
