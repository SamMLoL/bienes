<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloRegMarca extends Model
{
    protected $table = 'marcas';
    protected $fillable = ['codMarca','denCoMar','nomFabri','revisadot5','anulart5'];

    
 public function selectMarca()
    {
        return $this->belongsTo('App\sel_marca', 'codMarca');
    }

public function selectMarca1()
    {
        return $this->belongsTo('App\sel_marca1', 'denCoMar');
    }

 public function selectMarca2()
    {
        return $this->belongsTo('App\sel_marca2', 'nomFabri');
    }
}
