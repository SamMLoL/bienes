<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloModelos extends Model
{

use SoftDeletes;

    protected $table = "modelos";

    protected $dates = ['deleted_at'];

    protected $fillable = ['codModel','denModFab','codMarca','codSegModel'];

     public function selectMarca()
    {
        return $this->belongsTo('App\modeloMarcas', 'codMarca');
    }

    public function selectModelbien()
    {
        return $this->hasOne('App\modeloBienes', 'codModel');
    }

    public function selectModeltrans()
    {
        return $this->hasOne('App\modeloEqtransporte', 'codModel');
    }
}
