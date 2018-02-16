<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class modeloS2 extends Model
{
  use SoftDeletes;  

  protected $table = 'maxima';

  protected $dates = ['deleted_at'];
  
  protected $fillable = ['cedula','nombre','apellido','telefono','cargo','correo','numGaceta','feGaceta','numDecre','feDecre','revisadoS2'];
}
