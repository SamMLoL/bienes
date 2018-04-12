<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloS4 extends Model
{

     protected $table = 'sedes';

     protected $dates = ['deleted_at'];

     protected $fillable = ['codSede','tipoSede','espeSede','descSede','localizacion','codPais','espeOtroPais','codParroquia','codCiudad','espeOtroCiudad','urbanizacion','calleAvenida','casaEdificio','piso','revisadoS4'];

      #FUNCION DE SELECT

    /*public static function modifiqueParroquias(){
         return sel_parroquias::all();
     }

    public static function modifiqueCiudad(){
         return sel_ciudad::all();
     }*/


     public function selectSedes()
    {
        return $this->belongsTo('App\sel_sedes', 'tipoSede');
    }

    public function selectLocalizacion()
    {
        return $this->belongsTo('App\sel_proveedores', 'localizacion');
    }

    public function selectPais()
    {
        return $this->belongsTo('App\sel_paises', 'codPais');
    }

    public function selectParroquia()
    {
        return $this->belongsTo('App\sel_parroquias', 'codParroquia');
    }

    public function selectCodCiudad()
    {
        return $this->belongsTo('App\sel_ciudad', 'codCiudad');
    }


}
