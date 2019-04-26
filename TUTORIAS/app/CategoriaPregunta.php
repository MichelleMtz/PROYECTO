<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaPregunta extends Model
{
    //
    protected $table='Categorias_Pregunta';
    protected $primaryKey='id_categoria';
    protected $fillable=['nombre_catego'];
}
