<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puestos extends Model
{
    //
    protected $table='Puestos';
    protected $primaryKey='id_puesto';
    protected $fillable=['descripcion_puesto'];
}
