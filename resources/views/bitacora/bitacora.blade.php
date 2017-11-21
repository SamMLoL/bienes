@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="row separar40">
                <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-archive" aria-hidden="true"></i>   BITÁCORA</b></h5></div>
            </div>

            <table id="tablaT2" class="tabla table-striped table-responsive table-bordered table-hover">
              
                <thead style="font-size:13px;">

                    <tr>
                        <td id="letrasb" class="text-center">Usuario</td>
                       
                        <td id="letrasb" class="text-center">Acción Realizada</td>
                       
                        <td id="letrasb" class="text-center">Referencia</td>
                       
                        <td id="letrasb" class="text-center">Fecha y Hora de la Acción</td>
                    </tr>
                
                </thead>

              <tbody style="font-size:12px;">
                @foreach($bitacora as $bi)
                    <tr>
                   
                        <td class="text-center"><a href="#" >{{$bi->id}}</a> {{$bi->users->name}}</td>
                      
                        <td class="text-center">{{$bi->acciones->opcion}}</td>

                        <td class="text-center">{{$bi->referencia}}</td>
                    
                        <td class="text-center">{{$bi->created_at->format('d/m/Y - h:i A')}}</td>
              
                    </tr>     
                @endforeach
             </tbody>
          </table>
        </div>
    </div>
    
@endsection

                 
            