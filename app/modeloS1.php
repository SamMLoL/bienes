<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloS1 extends Model
{
    protected $table = 'basicos';
    protected $fillable = ['codSigecof','siglas','grupo','rifProvee','razonSocial','telfEnte','direcWeb','correEnte','feGaceta','numGaceta','revisadoS1'];
}
