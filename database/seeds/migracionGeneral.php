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

      $dato = array("S/M","APPLE","CABINET","MICROLIFE","OFITECH","WIDMER","HEWLETT PACKARD (HP)","CANON","ELECTROLUX","KW-TRIO","EVANS","MABE","PANASONIC","OLYMPUS","SONY","TRUPER","SAMSUNG","X ACTO","COMIX","EPSON","INFOCUS","STAR","GARRET","WARING","ELECTROMASTER","VISION QUEST","LINKSYS","CASIO","SKIL","BLACK AND DECKER","DEWALT","KHALED","GIGASET","DKLINK","INTEL","LENOVO","DVR","HD","SIEMENS","VIT","APC","TP-LINK","HIK VISION","JVC","PANDORA","SENNHEISER","MARBO","ISONIC","SIRAGON","ENERKOX","WHIRLPOOL","CUTTING PLOTTER","PREMIUM","INTERACTIVE","KONICA MINOLTA","LASKO","KARCHER","LG","METVISA","BACCO","FELLOWES","OPENVOX","GRANDSTREAM","YEALINK","TUCSON","TERABYTE","BEZZERA","ONE TOUCH","IONIC","SAYONARA","ABM","OFFICE CHAIR","KROLLS","BIOTRACK","FRIGILUX","WEX","WEST BEND","SIMMONS","BEHRINGER","OSTER"," COIL MAC","ADATA","SKYMSEN","CROYDON IMSTAR","DICKES","FONCE","FRIGIDAIRE","HBM","ISOMIA","LEDO","LIVING HOME","MOTOROLA","OZONO","SHARP","SUECO","SUPER MEGA TURBO","TAKIMA","TAURUS","TECHKO","TORREY","VIPN","WAHL PEANUT","WD MY PASSPORT","BOOSTER"," CLEAR WATER","FUJI FILM","TECAM","OMEGA","AUSTUS","MAXI HOUSE","RETEVIS","LUFERCA","M MPLUS","EUROCHEF");

      foreach ($dato as $v) {
        DB::table('mig_selectT5')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array(
        array("MARCA000","1"),
        array("MARCA001","2"),
        array("MARCA002","3"),
        array("MARCA003","4"),
        array("MARCA004","5"),
        array("MARCA005","6"),
        array("MARCA006","7"),
        array("MARCA007","8"),
        array("MARCA008","9"),
        array("MARCA009","10"),
        array("MARCA010","11"),
        array("MARCA011","12"),
        array("MARCA012","13"),
        array("MARCA013","14"),
        array("MARCA014","15"),
        array("MARCA015","16"),
        array("MARCA016","17"),
        array("MARCA017","18"),
        array("MARCA018","19"),
        array("MARCA019","20"),
        array("MARCA020","21"),
        array("MARCA021","22"),
        array("MARCA022","23"),
        array("MARCA023","24"),
        array("MARCA024","25"),
        array("MARCA025","26"),
        array("MARCA026","27"),
        array("MARCA027","28"),
        array("MARCA028","29"),
        array("MARCA029","30"),
        array("MARCA030","31"),
        array("MARCA031","32"),
        array("MARCA032","33"),
        array("MARCA033","34"),
        array("MARCA034","35"),
        array("MARCA035","36"),
        array("MARCA036","37"),
        array("MARCA037","38"),
        array("MARCA038","39"),
        array("MARCA039","40"),
        array("MARCA040","41"),
        array("MARCA041","42"),
        array("MARCA042","43"),
        array("MARCA043","44"),
        array("MARCA044","45"),
        array("MARCA045","46"),
        array("MARCA046","47"),
        array("MARCA047","48"),
        array("MARCA048","49"),
        array("MARCA049","50"),
        array("MARCA050","51"),
        array("MARCA051","52"),
        array("MARCA052","53"),
        array("MARCA053","54"),
        array("MARCA054","55"),
        array("MARCA055","56"),
        array("MARCA056","57"),
        array("MARCA057","58"),
        array("MARCA058","59"),
        array("MARCA059","60"),
        array("MARCA060","61"),
        array("MARCA061","62"),
        array("MARCA062","63"),
        array("MARCA063","64"),
        array("MARCA064","65"),
        array("MARCA065","66"),
        array("MARCA066","67"),
        array("MARCA067","68"),
        array("MARCA068","69"),
        array("MARCA069","70"),
        array("MARCA070","71"),
        array("MARCA071","72"),
        array("MARCA072","73"),
        array("MARCA073","74"),
        array("MARCA074","75"),
        array("MARCA075","76"),
        array("MARCA076","77"),
        array("MARCA077","78"),
        array("MARCA078","79"),
        array("MARCA079","80"),
        array("MARCA080","81"),
        array("MARCA081","82"),
        array("MARCA082","83"),
        array("MARCA083","84"),
        array("MARCA084","85"),
        array("MARCA085","86"),
        array("MARCA086","87"),
        array("MARCA087","88"),
        array("MARCA088","89"),
        array("MARCA089","90"),
        array("MARCA090","91"),
        array("MARCA091","92"),
        array("MARCA092","93"),
        array("MARCA093","94"),
        array("MARCA094","95"),
        array("MARCA095","96"),
        array("MARCA096","97"),
        array("MARCA097","98"),
        array("MARCA098","99"),
        array("MARCA099","100"),
        array("MARCA100","101"),
        array("MARCA101","102"),
        array("MARCA102","103"),
        array("MARCA103","104"),
        array("MARCA104","105"),
        array("MARCA105","106"),
        array("MARCA106","107"),
        array("MARCA107","108"),
        array("MARCA108","109"),
        array("MARCA109","110"),
        array("MARCA110","111"),
        array("MARCA111","112"),
        array("MARCA112","113"),
        array("MARCA113","114"),
       
        );

      foreach ($dato as $v) {
        DB::table('mig_selectT51')->insert([
           'opcion' => $v[0],
           'marca_id' => $v[1],
           

          ]);   
      }


       $dato = array(
        array("SIN MARCA","1"),
        array("APPLE INC.","2"),
        array("XXX","3"),
        array("MICROLIFE CORPORATION","4"),
        array("OFITECH","5"),
        array("XXX","6"),
        array("HP INC","7"),
        array("CANON INC.","8"),
        array("AB ELECTROLUX","9"),
        array("XXX","10"),
        array("XXX","11"),
        array("MABE S.A.","12"),
        array("PANASONIC CORP.","13"),
        array("OLYMPUS CORPORATION","14"),
        array("SONY CORPORATION","15"),
        array("TRUPER S.A.","16"),
        array("SAMSUNG ELECTRONICS","17"),
        array("ELMER´S PRODUCTS, INC.","18"),
        array("XXX","19"),
        array("SEIKO EPSON CORPORATION","20"),
        array("INFOCUS CORPORATION","21"),
        array("METALÚRGICA STAR, C.A.","22"),
        array("XXX","23"),
        array("XXX","24"),
        array("ELECTROMASTER C.A.","25"),
        array("XXX","26"),
        array("CISCO SYSTEMS","27"),
        array("CASIO COMPUTER CO., LTD","28"),
        array("XXX","29"),
        array("STANLEY BLACK & DECKER, INC.","30"),
        array("DEWALT","31"),
        array("KHALED","32"),
        array("GIGASET COMMUNICATIONS","33"),
        array("XXX","34"),
        array("INTEL CORPORATION","35"),
        array("LENOVO GROUP LTD.","36"),
        array("XXX","37"),
        array("XXX","38"),
        array("SIEMENS AG","39"),
        array("VENEZOLANA DE INDUSTRIA TECNOLÓGICA C.A.","40"),
        array("SCHNEIDER ELECTRIC","41"),
        array("TP-LINK TECHNOLOGIES CO. LTD.","42"),
        array("XXX","43"),
        array("XXX","44"),
        array("XXX","45"),
        array("SENNHEISER ELECTRONIC GMBH & CO. KG","46"),
        array("XXX","47"),
        array("ISONIC","48"),
        array("SIRAGON, C.A.","49"),
        array("XXX","50"),
        array("WHIRLPOOL CORPORATION","51"),
        array("XXX","52"),
        array("PREMIUM DE VENEZUELA, S.R.L.","53"),
        array("XXX","54"),
        array("KONICA MINOLTA HOLDINGS, INC.","55"),
        array("LASKO PRODUCTS, INC. ","56"),
        array("ALFRED KÄRCHER GMBH & CO. KG. ","57"),
        array("LG ELECTRONICS","58"),
        array("BIMG-BRASIL INDÚSTRIA DE MÁQUINAS PARA GASTRONOMIA LTDA. ","59"),
        array("BACCO","60"),
        array("XXX","61"),
        array("XXX","62"),
        array("XXX","63"),
        array("YEALINK INC..","64"),
        array("XXX","65"),
        array("XXX","66"),
        array("S.R.L.","67"),
        array("ONE TOUCH SYSTEMS","68"),
        array("XXX","69"),
        array("XXX","70"),
        array("XXX","71"),
        array("XXX","72"),
        array("XXX","73"),
        array("XXX","74"),
        array("CYBERLUX DE VENEZUELA C.A.","75"),
        array("XXX","76"),
        array("XXX","77"),
        array("SIMMONS BEDDING COMPANY LLC.","78"),
        array("MUSIC GROUP IP LTD. ","79"),
        array("JOHN OSTER MANUFACTURING COMPANY","80"),
        array("AKILES PRODUCTS, INC","81"),
        array("ADATA TECHNOLOGY CO.","82"),
        array("METALÚRGICA SIEMSEN LTDA","83"),
        array("METALÚRGICA STAR, C.A.","84"),
        array("XXX","85"),
        array("XXX","86"),
        array("FRIGIDAIRE APPLIANCE COMPANY","87"),
        array("HOTTINGER BALDWIN MESSTECHNIK","88"),
        array("XXX","89"),
        array("XXX","90"),
        array("XXX","91"),
        array("MOTOROLA INC.","92"),
        array("XXX","93"),
        array("SHARP CORPORATION","94"),
        array("SUDELEC S.A.","95"),
        array("XXX","96"),
        array("TAKIMA TOOLS","97"),
        array("TAURUS GROUP","98"),
        array("XXX","99"),
        array("TORREY","100"),
        array("XXX","101"),
        array("WAHL CLIPPER CORPORATION","102"),
        array("WESTERN DIGITAL CORPORATION","103"),
        array("BOOSTER","104"),
        array("CLEAR WATER","105"),
        array("FUJI FILM HOLDINGS CORPORATION","106"),
        array("TECAM, S.A.","107"),
        array("GRUPO SWATCH ","108"),
        array("XXX","109"),
        array("XXX","110"),
        array("SHENZHEN RETEVIS TECHNOLOGY CO.,LTD ","111"),
        array("LUFERCA C.A.","112"),
        array("XXX","113"),
        array("EUROPLUS 23, C.A. ","114"),

        );
    

      foreach ($dato as $v) {
        DB::table('mig_selectT52')->insert([
           'opcion' => $v[0],
           'codMarca_id' => $v[1],

          ]);   
      }

    }
}