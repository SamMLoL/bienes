<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class modeloDirecta extends Model
{

use SoftDeletes;

     protected $table ='directa';

	 protected $dates = ['deleted_at'];
    
     protected $fillable = ['codOt2_1','codAdq','codProvee','numCom','numNota','numFac','feCom','feNota','feFac','revisadot21'];


    /* FUNCION DE SELECT*/

 public function selectDirecta()
    {
        return $this->belongsTo('App\sel_directa', 'codAdq');
    }

 public function selectCodProvee()
    {
        return $this->belongsTo('App\modeloProveedores', 'codProvee');
    }
}
