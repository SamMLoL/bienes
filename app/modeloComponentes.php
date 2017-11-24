<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloComponentes extends Model
{
    protected $table = 'componentes';
    protected $fillable = ['codigo','denComponente','codBienMueble','revisadot7','anulart7'];
}


