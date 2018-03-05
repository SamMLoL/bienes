<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_paises extends Model
{
    protected $table = 'sel_paises';
    protected $fillable = ['codPais','pais','revisadoAddPais'];
}
