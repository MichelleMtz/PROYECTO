<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    //
    protected $table='Docentes';
    protected $primaryKey='id_docente';
    protected $fillable=['clave_d','id_dato','id_direccion'];

    function getDato(){
        return $this->hasMany("App\Datos",'id_dato','id_dato');
    }
}
