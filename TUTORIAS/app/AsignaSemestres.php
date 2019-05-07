<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaSemestres extends Model
{
    //
    protected $table='Asigna_semestres';
    protected $primaryKey='id_asigna_semestre';
    protected $fillable=['id_alumno','id_semestre','id_grupo','id_periodo'];
}
