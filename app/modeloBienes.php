<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloBienes extends Model
{
    protected $table = 'bienes';
    protected $fillable = ['codOt2_1','codCata','depenAdm','sedeOrgano','codResBien','codInterno','espOtro','valorAdq','moneda','espeMoneda','feAdqBien','feIngBien','edoBien','espOtroEdo','descEdoBien','serialBien','codMarca','codModel','añoFabriBien','codColorBien','espeColor','otraEspeColor','espeTecBien','otraDescBien','garantia','unidadMedi','feIniGarantia','feFinGarantia','poseeCompo','seguroBien','codRegSeguro'];

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
}
