<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_seguros extends Model
{
     protected $table = 'sel_seguros';

     public function selectSeguros()
    {
        return $this->hasOne('App\modeloSeguros', 'compAse');
    }
}
