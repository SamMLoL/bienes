<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT3 extends Model
{
    protected $table = 'T3';
    protected $fillable = ['codRegT3','compAse','otraCom','numPoli','tipPoli','montoAse','moneda','espMone','feiniPoli','fefinPoli','poseRes','tipoCobe','espeCobe','descCobe','revisadot3','anulart3'];

    /*SELECT compAse => selectt3 , Número de Póliza => numPoli , Moneda => moneda*/

      public function selectT3()
    {
        return $this->belongsTo('App\mod_selectT3', 'compAse');
    }

     public function selectT31()
    {
        return $this->belongsTo('App\mod_selectT31', 'tipPoli');
    }

    public function selectT32()
    {
        return $this->belongsTo('App\mod_selectT32', 'moneda');

    }

    public function selectT33()
    {
        return $this->belongsTo('App\mod_selectT33', 'poseRes');
    }

    public function selectT34()
    {
        return $this->belongsTo('App\mod_selectT34', 'tipoCobe');
    }
}
