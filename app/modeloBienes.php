<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloBienes extends Model
{
    protected $table = 'bienes';
    protected $fillable = ['codOt2_1','codCata','depAdmRes','sedeOrgano','codResBien','codInterno','estatuBien','espOtro','valorAdq','moneda','espeMoneda','feAdqBien','feIngBien','edoBien','espOtroEdo','descEdoBien','serialBien','codMarca','codModel','añoFabriBien','codColorBien','espeColor','otraEspeColor','espeTecBien','otraDescBien','garantia','unidadMedi','feIniGarantia','feFinGarantia','poseeCompo','seguroBien','codRegSeguro','revisadot8'];

    public static function selectBienes($id){
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

    public function selectDependencia()
    {
        return $this->belongsTo('App\sel_responsables1', 'depAdmRes');
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

}
