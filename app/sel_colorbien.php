<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_colorbien extends Model
{
    protected $table = 'sel_colorbien';

    protected $fillable = ['opcion'];

    public function selectColorbien()
    {
        return $this->hasOne('App\modeloBienes', 'codColorBien');
    }

    public function selectColorbientr()
    {
        return $this->hasOne('App\modeloEqtransporte', 'codColorBien');
    }

    public function selectColorbiensemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'codColorBien');
    }
}
