<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloDatosbienes extends Model
{

use SoftDeletes;

    protected $table = 'datosbienes';
    
    protected $dates = ['deleted_at'];

    protected $fillable = ['codBien','codCompo','serialCompo','codTipoCompo','codMarca','codModel','descCompo','revisadot11'];

    public function selectMarcadatosb()
    {
        return $this->belongsTo('App\modeloMarcas', 'codMarca');
    }

    public function selectModeldatosb()
    {
        return $this->belongsTo('App\modeloModelos', 'codModel');
    }
}
