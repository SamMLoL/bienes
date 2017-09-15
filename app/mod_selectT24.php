<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT24 extends Model
{
     /* Migracion del modelo mod_selectT24 para el select ubicado en la tabla T2-4*/
    protected $table = 'mig_selectT24';

     public function selectT24()
    {
        return $this->hasOne('App\modeloT24', 'codAdq');
    }
}
