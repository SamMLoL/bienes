<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_estatusbien extends Model
{
    protected $table = 'sel_estatusbien';

     public function selectEstatus()
    {
        return $this->hasOne('App\modeloBienes', 'estatuBien');
    }

    public function selectEstatustr()
    {
        return $this->hasOne('App\modeloEqtransporte', 'estatuBien');
    }
}
