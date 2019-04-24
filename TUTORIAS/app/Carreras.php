<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    protected $table='Carreras';
    protected $primaryKey='id_carrera';
    protected $fillable=['nombre_carrera'];
}
