<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT22 extends Model
{
    protected $table = 'T22';
    protected $fillable = ['codOt2_2','codAdq','nomPa','nomBen','nomAuto','numSenc','nomRegno','tomo','folio','feSenc','feReg','revisadot22','anulart22'];

        /* FUNCION DE SELECT*/

 public function selectT22()
    {
        return $this->belongsTo('App\mod_selectT22', 'codAdq');
    }
}
