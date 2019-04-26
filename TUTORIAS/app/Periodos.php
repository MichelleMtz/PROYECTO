<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    //
    protected $table='Periodos';
    protected $primaryKey='id_periodo';
    protected $fillable=['periodo'];
}
