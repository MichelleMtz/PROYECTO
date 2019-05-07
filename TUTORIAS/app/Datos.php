<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    //
    protected $table='Datos';
    protected $primaryKey='id_dato';
    protected $fillable=['nombre','apellido_paterno','apellido_materno','id_nacionalidad','telefono','correo','id_sexo'];

    function getNacionalidad(){
        return $this->hasMany("App\Nacionalidades",'id_nacionalidad','id_nacionalidad');
    }
    function getSexo(){
        return $this->hasMany("App\Sexos",'id_sexo','id_sexo');
    }
}
