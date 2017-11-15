<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloModelos extends Model
{
    protected $table = "modelos";
    protected $fillable = ['codModel','denModFab','codMarca','codSegModel','revisadot6','anulart6'];

     public function sel_marca()
    {
        return $this->belongsTo('App\sel_marca1', 'codMarca');
    }
}
