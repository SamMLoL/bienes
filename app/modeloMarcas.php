<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloMarcas extends Model
{
    protected $table = "marcas";
    protected $fillable = ['codMarca','denComar','nomFabri'];


    public function selectMarca()
    {
        return $this->hasMany('App\modeloModelos', 'codMarca');
    }

}
