<?php

use Illuminate\Database\Seeder;

class migracionGeneral extends Seeder
{
      public function run()
    {
      
      $dato = array('N=Nacional', 'I=Internacional');

      foreach ($dato as $v) {
        DB::table('mig_selectT1')->insert([
           'opcion' => $v,

          ]);   
      }
        
      $datot2= array('Compra por Concurso Abierto','Compra por Concurso Cerrado');

        foreach ($datot2 as $v) {
           DB::table('mig_selectT2')->insert([
          'opcion' => $v,

          ]);
        }

      $dato = array('Compra Directa (por consulta de Precio)');

      foreach ($dato as $v) {
        DB::table('mig_selectT21')->insert([
           'opcion' => $v,

          ]);   
      }

      foreach ($dato as $v) {
        DB::table('mig_selectT22')->insert([
           'opcion' => $v,

          ]);   
      }

      foreach ($dato as $v) {
        DB::table('mig_selectT23')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Donación');

      foreach ($dato as $v) {
        DB::table('mig_selectT24')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Expropiación');

      foreach ($dato as $v) {
        DB::table('mig_selectT25')->insert([
           'opcion' => $v,

          ]);   
      }
        

      $dato = array('Permuta');

      foreach ($dato as $v) {
        DB::table('mig_selectT26')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Transferencia');

      foreach ($dato as $v) {
        DB::table('mig_selectT27')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Adjudicación');

      foreach ($dato as $v) {
        DB::table('mig_selectT28')->insert([
           'opcion' => $v,

          ]);   
      }
        

      $dato = array("C.A. de Seguros Avila","C.N.A. de Seguros La Previsora","Mapfre La Seguridad C.A. de Seguros","Seguros Caracas de Liberty Mutual, C.A","Estar Seguros, S.A. (Antes Royal & Sun Alliance Seguros (Venezuela) S.A.)","Seguros Venezuela C.A","Seguros Provincial C.A","Adriática de Seguros, C.A","Seguros Carabobo, C.A","La Venezolana de Seguros y de Vida, C.A","Seguros Los Andes, C.A,","Seguros Nuevo Mundo S.A","Seguros Horizonte, C.A","C.A. de Seguros La Occidental","C.A. Seguros Catatumbo","Seguros La Fe C.A","C.A. de Seguros American International","Seguros Virgen del Valle, C.A","Seguros Federal, C.A. (Antes Seguros Federación C.A.)","La Mundial C.A. Venezolana de Seguros de Crédito","Mercantil Seguros , C.A","C.A. Seguros Guayana","La Oriental de Seguros C.A","Seguros Pirámide C.A","Seguros Universitas, C.A. (Antes Universitas de Seguros C.A.)","Interbank Seguros S.A","La Regional C.A. de Seguros","Multinacional de Seguros C.A","Zuma Seguros, C.A. (Antes Seguros Bancentro S.A.)","Seguros Constitución C.A. (Antes Seguros Sofitasa)","Seguros Comerciales Bolívar S.A","C.A. de Seguros La Internacional","Seguros Premier, C.A (antes Chubb de Venezuela)","Seguros Comerciales Bolívar S.A","C.A. de Seguros La Internacional","Seguros Premier, C.A (antes Chubb de Venezuela)","Seguros Corporativos C.A","Seguros Banvalor C.A","Proseguros, S.A. (antes Rescarven)","Seguros Altamira C.A","Seguros Canarias de Venezuela C.A","Banesco Seguros C.A","Seguros Caroní C.A","Universal de Seguros C.A","Aseguradora Nacional Unida Uniseguros, S.A","Hispana de Seguros C.A","Primus Seguros, C.A","Oceánica de Seguros, C.A (Antes Grupo Asegurador Previsional (Grasp), C.A.)","Seguros Qualitas C.A","Seguros La Vitalicia, C.A","Iberoamericana de Seguros, C.A","ZURICH SEGUROS S.A","Estar Seguros, S.A. (Antes Royal & Sun Alliance Seguros (Venezuela) S.A.)","Otra Compañía de Seguro");

      foreach ($dato as $v) {
        DB::table('mig_selectT3')->insert([
           'opcion' => $v,

          ]);   
      }
        

      $dato = array("I=Individual","C=Colectiva");

      foreach ($dato as $v) {
        DB::table('mig_selectT31')->insert([
           'opcion' => $v,

          ]);   
      }
    	
    	$dato = array("Bolívares","Dólares","Euros","Otra Moneda");

    	foreach ($dato as $v) {
    		DB::table('mig_selectT32')->insert([
       	   'opcion' => $v,

       		]); 	
    	}
       	
        $dato = array("Sí","No");

      foreach ($dato as $v) {
        DB::table('mig_selectT33')->insert([
           'opcion' => $v,

          ]);   
      }

       $dato = array("Total","Parcial","Otro tipo de cobertura");

      foreach ($dato as $v) {
        DB::table('mig_selectT34')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Administrativo","Uso Directo","Cuido Directo");

      foreach ($dato as $v) {
        DB::table('mig_selectT4')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Administración","Atención Ciudadana","Auditoría","Comunicación y Relaciones Institucionales","Consultoría","Despacho del Vicepresidente","Dir. General","Instrucciones y Delegaciones Presidenciales","Planificación Estratégica y Presupuesto","RRHH","Seguimiento y Control","Seguridad Integral","Tecnología de la Información");

      foreach ($dato as $v) {
        DB::table('mig_selectT41')->insert([
           'opcion' => $v,

          ]);   
      }
    }
}