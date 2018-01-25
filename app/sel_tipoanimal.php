<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_tipoanimal extends Model
{
    protected $table = 'sel_tipoanimal';
    protected $fillable = ['opcion'];

    public function selectAnimalsemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'tipoAnimal');
    }
}

