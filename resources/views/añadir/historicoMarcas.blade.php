@extends('layouts.app')

@section('content')

 <div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12">
              <center><h4><b>D</b></h4></center>
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
             
              <thead>
                  <tr>

                    <th id="letrasb" class="text-center" >Marca</th>
                    <th id="letrasb" class="text-center" >Marca</th>
                    <th id="letrasb" class="text-center" >Código de la Marca</th>
                  </tr>
              </thead>
     
              <tbody>
           <?php  
              foreach ($histoMarca as $fila){
                      echo "<tr>";
                      foreach ($fila as $celda){
                              echo "<td> $celda </td>";
                              }
                      echo "</tr>";
                      }
            ?>
              </tbody>
        </table>
    </div>
  </div>

@endsection