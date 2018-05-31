<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_unidades extends Model
{
    protected $table = 'sel_unidades';
    protected $fillable = ['codigo','unidad'];

    public function selectUnidad()
    {
        return $this->hasOne('App\modeloResponsables', 'codUnidad');
    }

    public function selectUnidadbienes()
    {
        return $this->hasOne('App\modeloBienes', 'codUnidad');
    }

    public function selectUnidadtran()
    {
        return $this->hasOne('App\modeloBienes', 'codUnidad');
    }

    public function selectUnidadsemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'codUnidad');
    }

    public function selectUnidadinmu()
    {
        return $this->hasOne('App\sel_unidades', 'codUnidad');
    }

}
