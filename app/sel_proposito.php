<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_proposito extends Model
{
    protected $table = 'sel_proposito';
    protected $fillable = ['opcion'];

    public function selectPropositosemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'proposito');
    }
}
