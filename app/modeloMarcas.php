<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloMarcas extends Model
{

use SoftDeletes;

    protected $table = "marcas";

	protected $dates = ['deleted_at'];
    
    protected $fillable = ['codMarca','denComar','nomFabri'];

    public function selectMarca()
    {
        return $this->hasMany('App\modeloModelos', 'codMarca');
    }

}
