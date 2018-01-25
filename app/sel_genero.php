<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_genero extends Model
{
    protected $table = 'sel_genero';
    protected $fillable = ['opcion'];

    public function selectGenerosemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'genero');
    }
}
