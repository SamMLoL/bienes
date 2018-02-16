<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class modeloS1 extends Model
{
use SoftDeletes;

    protected $table = 'basicos';

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['codSigecof','siglas','grupo','rifProvee','razonSocial','telfEnte','direcWeb','correEnte','feGaceta','numGaceta','revisadoS1'];
}
