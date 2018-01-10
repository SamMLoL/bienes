<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_garantiabien extends Model
{
 	protected $table = 'sel_garantiabien';

 	public function selectUnidad()
    {
        return $this->hasOne('App\modeloBienes', 'unidadMedi');
    }
}
