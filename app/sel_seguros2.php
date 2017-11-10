<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_seguros2 extends Model
{
    protected $table = 'sel_seguros2';

     public function selectSeguros2()
    {
        return $this->hasOne('App\modeloSeguros', 'moneda');
    }
}
