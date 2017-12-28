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
}
