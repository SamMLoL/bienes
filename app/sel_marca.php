<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_marca extends Model
{
    protected $table = 'sel_marca';

    protected $fillable = ['opcion','relacion'];

    public function selectMarca()
    {
        return $this->hasOne('App\modeloRegMarca', 'codMarca');
    }

    public function sel_marca()
    {
        return $this->hasOne('App\sel_marca1', 'relacion');
    }
}
