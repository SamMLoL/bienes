<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloMarcas extends Model
{	
    protected $table = 'addmarcas';
    protected $fillable = ['codMarca','denCoMar','nomFabri'];
}
