<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT5 extends Model
{
    protected $table = 'T5';
    protected $fillable = ['codMarca','denCoMar','nomFabri','revisadot5','anulart5'];

    
 public function selectT5()
    {
        return $this->belongsTo('App\mod_selectT5', 'codMarca');
    }

public function selectT51()
    {
        return $this->belongsTo('App\mod_selectT51', 'denCoMar');
    }

 public function selectT52()
    {
        return $this->belongsTo('App\mod_selectT52', 'nomFabri');
    }

}
