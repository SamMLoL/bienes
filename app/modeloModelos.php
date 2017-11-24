<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloModelos extends Model
{
    protected $table = "modelos";
    protected $fillable = ['codModel','denModFab','codMarca','codSegModel'];

     public function selectMarca()
    {
        return $this->belongsTo('App\modeloMarcas', 'codMarca');
    }
}
