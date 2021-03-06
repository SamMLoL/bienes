<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloMarcas extends Model
{

use SoftDeletes;

    protected $table = "marcas";

	protected $dates = ['deleted_at'];
    
    protected $fillable = ['codMarca','denComar','nomFabri'];

    public function selectMarca()
    {
        return $this->hasMany('App\modeloModelos', 'codMarca');
    }

    public function selectMarcabien()
    {
        return $this->hasMany('App\modeloBienes', 'codMarca');
    }

    public function selectMarcatrans()
    {
        return $this->hasMany('App\modeloEqtransporte', 'codMarca');
    }

    public function selectMarcadatosb()
    {
        return $this->hasMany('App\modeloDatosbienes', 'codMarca');
    }

}
