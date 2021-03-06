<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_condicionbien extends Model
{
    protected $table = 'sel_condicionbien';

     public function selectCondicion()
    {
        return $this->hasOne('App\modeloBienes', 'edoBien');
    }

    public function selectCondiciontr()
    {
        return $this->hasOne('App\modeloEqtransporte', 'edoBien');
    }

    public function selectCondicionsemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'edoBien');
    }

    public function selectCondicioninmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'edoBien');
    }
    
}
