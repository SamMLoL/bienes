<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT4 extends Model
{
    protected  $table = 'T4';
    protected  $fillable = ['codResp','tipoResp','cedula','nomRes','apeRes','telfRes','cargoRes','correRes','depAdmRes','revisadot4','anulart4'];

     /*SELECT compAse => selectt3 , Número de Póliza => numPoli , Moneda => moneda*/

      public function selectT4()
    {
        return $this->belongsTo('App\mod_selectT4', 'tipoResp');
    }

      public function selectT41()
    {
        return $this->belongsTo('App\mod_selectT41', 'depAdmRes');
    }
}
