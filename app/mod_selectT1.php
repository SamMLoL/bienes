<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT1 extends Model
{
	/* Migracion del modelo mod_select_provee_T1 para el select ubicado en la tabla T1*/
    protected $table = 'mig_selectT1';

     public function selectT1()
    {
        return $this->hasOne('App\modeloT1', 'tip_prove_t1');
    }
}
