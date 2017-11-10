<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_directa extends Model
{
    /* Migracion del modelo sel_directa para el select ubicado en la tabla directa = T2.1*/
    protected $table = 'sel_directa';

     public function selectDirecta()
    {
        return $this->hasOne('App\modeloDirecta', 'codAdq');
    }
}
