<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_paises extends Model
{
    protected $table = 'sel_paises';
    protected $fillable = ['codPais','pais','revisadoAddPais'];

    

    public function selectPais()
    {
        return $this->hasOne('App\modeloS4', 'codPais');
    }

    public function selectPaisesinmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'codPais');
    }


    
}
