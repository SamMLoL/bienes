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

    public function selectEstatusemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'estatuBien');
    }

    public function selectEstatuinmu()
    {
        return $this->hasOne('App\modeloInmueble', 'estatuBien');
    }
}
