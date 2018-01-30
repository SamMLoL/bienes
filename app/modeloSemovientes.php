<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloSemovientes extends Model
{
use SoftDeletes;

    protected $table = 'semovientes';
    
    protected $dates = ['deleted_at'];

    protected $fillable = ['codBien','codCata','depAdmRes','sedeOrgano','codRespAdm','codResBien','codInterno','estatuBien','espOtroUso','valorAdq','moneda','espeMoneda','feAdqBien','feIngBien','edoBien','espOtroEdo','descEdoBien','raza','genero','tipoAnimal','espeOtroTipo','proposito','espeOtroPro','codColorBien','espeColor','otraEspeColor','peso','unidadPeso','feNacimiento','numHierro','seParticulares','otrasEspecifi','seguroBien','codRegSeguro'];

     public function selectDependenciasemo()
    {
        return $this->belongsTo('App\sel_responsables1', 'depAdmRes');
    }

    public function selectEstatusemo()
    {
        return $this->belongsTo('App\sel_estatusbien', 'estatuBien');
    }

    public function selectSegurosemo()
    {
        return $this->belongsTo('App\sel_seguros2', 'moneda');
    }

    public function selectAnimalsemo()
    {
        return $this->belongsTo('App\sel_tipoanimal', 'tipoAnimal');
    }

    public function selectPropositosemo()
    {
        return $this->belongsTo('App\sel_proposito', 'proposito');
    }

    public function selectCondicionsemo()
    {
        return $this->belongsTo('App\sel_condicionbien', 'edoBien');
    }

    public function selectGenerosemo()
    {
        return $this->belongsTo('App\sel_genero', 'genero');
    }

    public function selectColorbiensemo()
    {
        return $this->belongsTo('App\sel_colorbien', 'codColorBien');
    }

    public function selectPesosemo()
    {
        return $this->belongsTo('App\sel_medidapeso', 'unidadPeso');
    }

   public function selectSegurobiensemo()
    {
        return $this->belongsTo('App\sel_seguros3', 'seguroBien');
    }

}
