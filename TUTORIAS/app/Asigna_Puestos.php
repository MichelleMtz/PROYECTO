<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asigna_Puestos extends Model
{
    //
    protected $table='Asigna_Puestos';
    protected $primaryKey='id_asigna_puesto';
    protected $fillable=['id_docente','id_puesto','id_jefe','passw'];
    function getDocente(){
        return $this->hasMany("App\Docentes",'id_docente','id_docente');
    }
}
