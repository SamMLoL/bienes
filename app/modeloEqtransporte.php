<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloEqtransporte extends Model
{
use SoftDeletes;

    protected $table = 'transporte';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codBien','codCata','codUnidad','sedeOrgano','codRespAdm','codResBien','codInterno','estatuBien','espOtroUso','valorAdq','moneda','espeMoneda','feAdqBien','feIngBien','edoBien','espOtroEdo','descEdoBien','claseBien','espeClase','codMarca','codModel','anoFabriBien','serialCarro','serialMotor','placaBien','numTituPro','colorBien','otraEspeColor','capacidadBien','nomDadoBien','usoBien','espeTecBien','otraEspeBien','garantia','unidadMedi','feIniGarantia','tieneSistema','espeSistema','poseeCompo','seguroBien','codRegSeguro','revisadot9'];

    

    public function selectCondiciontr()
    {
        return $this->belongsTo('App\sel_condicionbien', 'edoBien');
    }

    public function selectClasebien()
    {
        return $this->belongsTo('App\sel_clasebien', 'claseBien');
    }

    public function selectUnidadtran()
    {
        return $this->belongsTo('App\sel_unidades', 'codUnidad');
    }

    public function selectEstatustr()
    {
        return $this->belongsTo('App\sel_estatusbien', 'estatuBien');
    }

    public function selectSegurostr()
    {
        return $this->belongsTo('App\sel_seguros2', 'moneda');
    }

    public function selectMarcatrans()
    {
        return $this->belongsTo('App\modeloMarcas', 'codMarca');
    }

    public function selectModeltrans()
    {
        return $this->belongsTo('App\modeloModelos', 'codModel');
    }

    public function selectColorbientr()
    {
        return $this->belongsTo('App\sel_colorbien', 'codColorBien');
    }

    public function selectUnidadtr()
    {
        return $this->belongsTo('App\sel_garantiabien', 'unidadMedi');
    }

    public function selectComponentetr()
    {
        return $this->belongsTo('App\sel_seguros3', 'poseeCompo');
    }
}
