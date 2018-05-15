<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloBienes extends Model
{
use SoftDeletes;

    protected $table = 'bienes';
    
    protected $dates = ['deleted_at'];

    protected $fillable = ['codOt2_1','codCata','codUnidad','sedeOrgano','codResBien','codInterno','estatuBien','espOtroUso','valorAdq','moneda','espeMoneda','feAdqBien','feIngBien','edoBien','espOtroEdo','descEdoBien','serialBien','codMarca','codModel','añoFabriBien','codColorBien','espeColor','otraEspeColor','espeTecBien','otraDescBien','garantia','unidadMedi','feIniGarantia','feFinGarantia','poseeCompo','seguroBien','codRegSeguro','revisadot8'];

    public static function selectBienes($id){
         return modeloModelos::where('codMarca', $id)->get();
     }

    public static function selectBienesmodif($id){
         return modeloModelos::where('codMarca', $id)->get();
     }
     
    public function selectEstatus()
    {
        return $this->belongsTo('App\sel_estatusbien', 'estatuBien');
    }

    public function selectCondicion()
    {
        return $this->belongsTo('App\sel_condicionbien', 'edoBien');
    }

    public function selectUnidadbienes()
    {
        return $this->belongsTo('App\sel_unidades', 'codUnidad');
    }

    public function selectSeguros()
    {
        return $this->belongsTo('App\sel_seguros2', 'moneda');
    }

    public function selectMarcabien()
    {
        return $this->belongsTo('App\modeloMarcas', 'codMarca');
    }

    public function selectModelbien()
    {
        return $this->belongsTo('App\modeloModelos', 'codModel');
    }

    public function selectUnidad()
    {
        return $this->belongsTo('App\sel_garantiabien', 'unidadMedi');
    }

    public function selectComponente()
    {
        return $this->belongsTo('App\sel_seguros3', 'poseeCompo');
    }

    public function selectColorbien()
    {
        return $this->belongsTo('App\sel_colorbien', 'codColorBien');
    }

}
