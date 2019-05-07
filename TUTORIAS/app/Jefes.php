<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jefes extends Model
{
    //
    protected $table='Jefes';
    protected $primaryKey='id_jefe';
    protected $fillable=['id_dato','id_direccion','id_carrera','passw','clave_j'];

    function getCarrera(){
        return $this->hasMany("App\Carreras",'id_carrera','id_carrera');
    }
}
