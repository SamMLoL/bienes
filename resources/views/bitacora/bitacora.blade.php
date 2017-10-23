@extends('layouts.app')

@section('content')


    <div class="row">
        <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-archive" aria-hidden="true"></i>   BITÁCORA</b></h5></div>
    </div>
    

    <div class="row col-md-offset-2">
       <div class="col-md-10">
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
                 <div class="row">
                    <div class="col-md-4">
                      <td class="text-center"><a href="#" >{{$bi->id}}</a> {{$bi->users->name}}</td>
                      </div>

                    <div class="col-md-4">

                      <td class="text-center">{{$bi->acciones->opcion}}</td>
                
                    </div>

                    <div class="col-md-4">
                      <td class="text-center">{{$bi->referencia}}</td>

                    </div>

                    <div class="col-md-4">
                      <td class="text-center">{{$bi->created_at->format('d/m/Y - h:i A')}}</td>

                    </div>
                  </div>
            
              </tr>     
              @endforeach
           </tbody>
        </table>
       </div>
    </div>
      
@endsection

                 
            