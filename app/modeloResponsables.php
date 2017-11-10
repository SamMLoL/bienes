<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloResponsables extends Model
{
    protected  $table = 'responsables';
    protected  $fillable = ['codResp','tipoResp','cedula','nomRes','apeRes','telfRes','cargoRes','correRes','depAdmRes','revisadot4','anulart4'];

     /*SELECT compAse => selectt3 , Número de Póliza => numPoli , Moneda => moneda*/

      public function selectResponsables()
    {
        return $this->belongsTo('App\sel_responsables', 'tipoResp');
    }

      public function selectResponsables1()
    {
        return $this->belongsTo('App\sel_responsables1', 'depAdmRes');
    }
}
