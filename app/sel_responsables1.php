<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_responsables1 extends Model
{
    protected $table = 'sel_responsables1';

     public function selectResponsables1()
    {
        return $this->hasOne('App\modeloResponsables', 'depAdmRes');
    }

    public function selectDependencia()
    {
        return $this->hasOne('App\modeloBienes', 'depAdmRes');
    }

    public function selectDependenciatr()
    {
        return $this->hasOne('App\modeloEqtransporte', 'depAdmRes');
    }

    public function selectDependenciasemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'depAdmRes');
    }

    public function selectDepeninmueble()
    {
        return $this->hasOne('App\modeloInmuebles', 'depAdmRes');
    }
    
}
