<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_colorbien extends Model
{
    protected $table = 'sel_colorbien';

    protected $fillable = ['opcion'];

    public function selectColorbien()
    {
        return $this->hasOne('App\modeloBienes', 'codColorBien');
    }
}
