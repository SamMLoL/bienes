<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_seguros4 extends Model
{
    protected $table = 'sel_seguros4';

     public function selectSeguros4()
    {
        return $this->hasOne('App\modeloSeguros', 'tipoCobe');
    }
}
