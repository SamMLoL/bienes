<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_dacion extends Model
{
    /* Migracion del modelo mod_selectT23 para el select ubicado en la tabla T2-3*/
    protected $table = 'sel_dacion';

     public function selectDacion()
    {
        return $this->hasOne('App\modeloDacion', 'codAdq');
    }
}
