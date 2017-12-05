<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloComponentes extends Model
{

use SoftDeletes;

    protected $table = 'componentes';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codigo','denComponente','codBienMueble','revisadot7'];
}


