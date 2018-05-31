<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloS5 extends Model
{
    protected $table = 'unidades';
    protected $fillable = ['codUnidad','descUnidad','categoria','espeCatego','codAdscrita','revisadoS5'];
}
