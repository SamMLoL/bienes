<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT23 extends Model
{
    protected $table = 'T23';
    protected $fillable = ['codOt2_3','codAdq','nomCed','nomBen','numFin','feFin','nomRegn','tomo','folio','feReg','revisadot23','anulart23'];

          /* FUNCION DE SELECT*/

 public function selectT23()
    {
        return $this->belongsTo('App\mod_selectT23', 'codAdq');
    }
}
