<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_ciudad extends Model
{
    protected $table = 'sel_ciudad';
    protected $fillable = ['codCiudad','ciudad'];

    
     public function selectCiudades()
    {
        return $this->hasOne('App\modeloS4', 'codCiudad');
    }

     public function selectCiudadinmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'codCiudad');
    }

     public function selectCiudadsedes()
    {
        return $this->hasOne('App\modeloS4', 'codCiudad');
    }
}
