<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_parroquias extends Model
{
    protected $table = 'sel_parroquias';
    protected $fillable = ['codParroquia','parroquia'];
}
