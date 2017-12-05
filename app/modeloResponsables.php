<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloResponsables extends Model
{

use SoftDeletes;

    protected $table = 'responsables';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codResp','tipoResp','cedula','nomRes','apeRes','telfRes','cargoRes','correRes','depAdmRes','revisadot4'];

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
