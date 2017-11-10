<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_confiscacion extends Model
{
     /* Migracion del modelo mod_selectT22 para el select ubicado en la tabla T2-2*/
    protected $table = 'sel_confiscacion';

     public function selectConfiscacion()
    {
        return $this->hasOne('App\modeloConfiscacion', 'codAdq');
    }
}
