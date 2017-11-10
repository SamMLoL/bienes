<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_donacion extends Model
{
     /* Migracion del modelo mod_selectT24 para el select ubicado en la tabla T2-4*/
    protected $table = 'sel_donacion';

     public function selectDonacion()
    {
        return $this->hasOne('App\modeloDonacion', 'codAdq');
    }
}
