<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT26 extends Model
{
	 protected $table = 'mig_selectT26';

     public function selectT26()
    {
        return $this->hasOne('App\modeloT26', 'codAdq');
    }
}
