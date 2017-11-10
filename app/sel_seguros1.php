<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_seguros1 extends Model
{
    protected $table = 'sel_seguros1';

     public function selectSeguros1()
    {
        return $this->hasOne('App\modeloSeguros', 'tipPoli');
    }
}
