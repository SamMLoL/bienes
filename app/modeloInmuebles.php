<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloInmuebles extends Model
{
    protected $table = 'datosinmuebles';

    public static function modiPaisinmueble(){
         return sel_paises::all();
     }

    public static function modiParroinmueble(){
         return sel_parroquias::all();
     }

    public static function modiCiudadinmueble(){
         return sel_ciudad::all();
     }

    public function selectUnidadinmu()
    {
        return $this->belongsTo('App\sel_unidades', 'codUnidad');
    }

    public function selectCorresinmu()
    {
        return $this->belongsTo('App\sel_seguros3', 'corresBien');
    }

    public function selectEstatuinmu()
    {
        return $this->belongsTo('App\sel_estatusbien', 'estatuBien');
    }

    public function selectLocalinmu()
    {
        return $this->belongsTo('App\sel_proveedores', 'localizacion');
    }

    public function selectPaisesinmu()
    {
        return $this->belongsTo('App\sel_paises', 'codPais');
    }

    public function selectParroinmu()
    {
        return $this->belongsTo('App\sel_parroquias', 'codParroquia');
    }

    public function selectCiudadinmu()
    {
        return $this->belongsTo('App\sel_ciudad', 'codCiudad');
    }

    public function selectMonedainmu()
    {
        return $this->belongsTo('App\sel_seguros2', 'moneda');
    }

    public function selectCondicioninmu()
    {
        return $this->belongsTo('App\sel_condicionbien', 'edoBien');
    }

    public function selectUsoninmu()
    {
        return $this->belongsTo('App\sel_usos', 'usoBienInmu');
    }

    public function selectContrucinmu()
    {
        return $this->belongsTo('App\sel_medidapeso', 'unidadConstru');
    }

    public function selectTerrenoinmu()
    {
        return $this->belongsTo('App\sel_medidapeso', 'unidadTerreno');
    }

    public function selectSeguroinmu()
    {
        return $this->belongsTo('App\sel_seguros3', 'seguroBien');
    }

    
}
