<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloDirecta extends Model
{
     protected $table ='directa';
     protected $fillable = ['codOt2_1','codAdq','codPro','numCom','numNota','numFac','feCom','feNota','feFac','revisadot21','anulart21'];


    /* FUNCION DE SELECT*/

 public function selectDirecta()
    {
        return $this->belongsTo('App\sel_directa', 'codAdq');
    }
}
