<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT23 extends Model
{
     /* Migracion del modelo mod_selectT23 para el select ubicado en la tabla T2-3*/
    protected $table = 'mig_selectT23';

     public function selectT23()
    {
        return $this->hasOne('App\modeloT23', 'codAdq');
    }
}
