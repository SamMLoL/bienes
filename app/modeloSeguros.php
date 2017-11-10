<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloSeguros extends Model
{
    protected $table = 'seguros';
    protected $fillable = ['codRegT3','compAse','otraCom','numPoli','tipPoli','montoAse','moneda','espMone','feiniPoli','fefinPoli','poseRes','tipoCobe','espeCobe','descCobe','revisadot3','anulart3'];

    /*SELECT compAse => selectt3 , Número de Póliza => numPoli , Moneda => moneda*/

      public function selectSeguros()
    {
        return $this->belongsTo('App\sel_seguros', 'compAse');
    }

     public function selectSeguros1()
    {
        return $this->belongsTo('App\sel_seguros1', 'tipPoli');
    }

    public function selectSeguros2()
    {
        return $this->belongsTo('App\sel_seguros2', 'moneda');

    }

    public function selectSeguros3()
    {
        return $this->belongsTo('App\sel_seguros3', 'poseRes');
    }

    public function selectSeguros4()
    {
        return $this->belongsTo('App\sel_seguros4', 'tipoCobe');
    }
}
