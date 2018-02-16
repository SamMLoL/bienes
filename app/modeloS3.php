<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloS3 extends Model
{
use SoftDeletes;  

  protected $table = 'patrimonial';

  protected $dates = ['deleted_at'];
  
  protected $fillable = ['cedula','nombre','apellido','telefono','cargo','correo','numGaceta','feGaceta','numDecre','feDecre','revisadoS3'];
}
