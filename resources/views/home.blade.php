@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="panel">
            <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>HELLO</b></h5></div>
                <div class="panel-body">

                   <p class="text-justify"><b>Bienvenido</a></p>
                   	<div class="now">
                   		<form action="home/mensaje" method="post">
                   			<div class="form-group">
                   			{{ csrf_field() }}
                   			<input type="text" name="mensaje" class="form-control @if($errors->has('mensaje')) has danger @endif" placeholder="Que estas pensando?" />
                        @if($errors->any())
                          @foreach ($errors->get('mensaje') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>
                          @endforeach
                        @endif
                   			</div>
                   		</form>
                   	</div>
              </div>
         </div>
    </div>

@endsection

