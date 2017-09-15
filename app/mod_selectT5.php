<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT5 extends Model
{
    protected $table = 'mig_selectT5';


     public function selectT5()
    {
        return $this->hasOne('App\modeloT5', 'codMarca');
    }
}
