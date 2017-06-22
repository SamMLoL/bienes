@extends('layouts.app')

@section('content')

<div class="container" id="sha">
    <div class="row ">
       <div class="col-md-12 " >
           <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" >
       </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading text-center"><h4><b>NORMATIVAS DE BIENES NACIONALES</b></h4></div>

                <div class="panel-body">
                               <p class="text-justify"><b>Gaceta Oficial N° 39.945 del 15 de junio de 2012.</b>
            El Presidente de la República Hugo Chávez, dicta a través del Decreto N° 9.041 la Ley Orgánica de Bienes Públicos la cual tiene por objeto establecer las normas que regulan el ámbito, organización, atribuciones y funcionamiento del Sistema de Bienes Públicos, como parte integrante del Sistema de Administración Financiera del Estado.
            Las normas contenidas en el siguiente Decreto-Ley, normas reglamentarias y aquellas que emita la Superintendencia de Bienes Públicos, son de estricto cumplimiento tanto para las entidades que conforman el Sistema Nacional de Bienes Públicos, así como para las personas naturales o jurídicas que custodien o ejerzan algún derecho sobre un Bien Público, con las excepciones de la Ley, dejando a salvo las competencias y autonomía atribuidas en la materia por la Constitución de la República Bolivariana de Venezuela y las leyes correspondientes.
            Estas normas son de orden público y de aplicación preferente ante cualquier otro cuerpo normativo del mismo rango.
            Se consideran Bienes Públicos: los bienes muebles e inmuebles, títulos valores, acciones, cuotas o participaciones en sociedades y demás derechos, de dominio público o de dominio privado que hayan adquirido los órganos y entes que conforman el sector público; los bienes mercancías o efectos, que se encuentran en el territorio de la República y que no tienen dueño; los bienes muebles e inmueble, títulos valores, acciones, cuotas o participaciones en sociedades y demás derechos provenientes de las herencias yacentes; Las mercancías que se declaren abandonadas; los bienes, mercancías o efectos que sean objeto de una medida de comiso firme mediante acto administrativo o sentencia definitiva, y los que mediante sentencia firme o procedimiento de Ley sean puestos a la orden del Tesoro Nacional.
            Dentro de los Bienes Públicos, podemos encontrar las siguientes categorías: los Bienes Nacionales, Bienes Estadales, Bienes Municipales y Bienes Distritales. pero no se catalogan como Bienes Públicos:
            Los productos que sean adquiridos, concebidos, extraídos o fabricados por las personas, órganos y entes sujetos a esta Ley, de conformidad con su naturaleza, funciones, competencias, atribuciones o actividades comerciales, mercantiles, financieras o sociales, con destino a la venta
            Los artículos calificados como materiales y suministros según el Clasificador Presupuestario dictado por la Oficina Nacional de Presupuesto
            Los bienes adquiridos con la finalidad de ser donados de forma inmediata
            Los bienes adquiridos en ejecución de norma expresa, en cumplimiento de fines institucionales, con el fin de ser enajenados a terceros. <a href="{{ asset('pdf/bienes.pdf') }}">Leer más</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
