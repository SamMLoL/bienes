<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT2 extends Model
{
	/* Migracion del modelo mod_select_provee_T1 para el select ubicado en la tabla T1*/
    protected $table = 'mig_selectT2';

     public function t2()
    {
        return $this->hasOne('App\mod_selectT2', 'cod_adquisicion_t2');
    }
}
