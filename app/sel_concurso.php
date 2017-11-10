<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_concurso extends Model
{
    /* Migracion del modelo mod_select_provee_T1 para el select ubicado en la tabla T1*/
    protected $table = 'sel_concurso';

     public function selectConcurso()
    {
        return $this->hasOne('App\modeloConcurso', 'codAdquisicion');
    }
}
