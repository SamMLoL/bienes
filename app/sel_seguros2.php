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

     public function selectSeguros()
    {
        return $this->hasOne('App\modeloBienes', 'moneda');
    }

    public function selectSegurostr()
    {
        return $this->hasOne('App\modeloEqtransporte', 'moneda');
    }

    public function selectSegurosemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'moneda');
    }

    public function selectMonedainmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'moneda');
    }
}
