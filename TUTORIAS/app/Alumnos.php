<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //
    protected $table='ALumnos';
    protected $primaryKey='id_alumno';
    protected $fillable=['no_cuenta','id_dato','id_direccion','id_carrera','foto','passw'];
}
