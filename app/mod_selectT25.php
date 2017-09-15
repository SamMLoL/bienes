<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT25 extends Model
{
      /* Migracion del modelo mod_selectT25 para el select ubicado en la tabla T2-5*/
    protected $table = 'mig_selectT25';

     public function selectT25()
    {
        return $this->hasOne('App\modeloT25', 'codAdq');
    }
}
