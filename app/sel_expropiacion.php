<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_expropiacion extends Model
{
      /* Migracion del modelo mod_selectT25 para el select ubicado en la tabla T2-5*/
    protected $table = 'sel_expropiacion';

     public function selectExpropiacion()
    {
        return $this->hasOne('App\modeloExpropiacion', 'codAdq');
    }
}
