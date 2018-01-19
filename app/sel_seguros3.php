<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_seguros3 extends Model
{
    protected $table = 'sel_seguros3';

     public function selectSeguros3()
    {
        return $this->hasOne('App\modeloSeguros', 'poseRes');
    }

    public function selectComponente()
    {
        return $this->hasOne('App\modeloBIenes', 'poseeCompo');
    }

     public function selectComponentetr()
    {
        return $this->hasOne('App\sel_seguros3', 'poseeCompo');
    }
}
