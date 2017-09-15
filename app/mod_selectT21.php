<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT21 extends Model
{
    /* Migracion del modelo mod_selectT21 para el select ubicado en la tabla T2.1*/
    protected $table = 'mig_selectT21';

     public function selectT21()
    {
        return $this->hasOne('App\modeloT21', 'codAdq');
    }
}
