<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorTutorados extends Model
{
    //
    protected $table='ALumnos';
    protected $primaryKey='id_alumno';
    protected $fillable=['no_cuenta'];


}
