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

     public function selectSedes()
    {
        return $this->belongsTo('App\sel_sedes', 'tipoSede');
    }
}
