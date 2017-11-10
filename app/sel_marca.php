<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_marca extends Model
{
    protected $table = 'sel_marca';

    protected $fillable = ['opcion','marca_id','anularMarca'];


     public function selectMarca()
    {
        return $this->hasOne('App\modeloRegMarca', 'codMarca');
    }
}
