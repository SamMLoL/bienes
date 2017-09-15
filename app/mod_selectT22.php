<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT22 extends Model
{
      /* Migracion del modelo mod_selectT22 para el select ubicado en la tabla T2-2*/
    protected $table = 'mig_selectT22';

     public function selectT22()
    {
        return $this->hasOne('App\modeloT22', 'codAdq');
    }
}
