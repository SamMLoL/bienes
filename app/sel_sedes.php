<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_sedes extends Model
{
    protected $table = 'sel_sedes';

    public function selectSedes()
    {
        return $this->hasOne('App\modeloS4', 'tipoSede');
    }
}
