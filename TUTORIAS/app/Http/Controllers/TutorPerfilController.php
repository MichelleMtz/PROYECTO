<?php

namespace App\Http\Controllers;

use App\Asigna_Puestos;
use App\Docentes;
use App\Puestos;
use App\Datos;
use App\Nacionalidades;
use Illuminate\Http\Request;

class TutorPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Datos::join('Nacionalidades', 'Datos.id_nacionalidad', '=', 'Nacionalidades.id_nacionalidad')
            ->join('Sexos','Datos.id_sexo','=','Sexos.id_sexo')
            ->join('Docentes','Docentes.id_dato','=','Datos.id_dato')
            ->join('Asigna_Puestos','Asigna_Puestos.id_docente','=','Docentes.id_docente')
            ->join('Puestos','Puestos.id_puesto','=','Asigna_Puestos.id_puesto')
            ->join('Jefes','Jefes.id_jefe','=','Asigna_Puestos.id_jefe')
            ->join('Carreras','Carreras.id_carrera','=','Jefes.id_carrera')
            ->join('Grupos','Grupos.id_grupo','=','Asigna_Puestos.id_grupo')
            ->select( 'Datos.nombre','Datos.apellido_paterno','Datos.apellido_materno', 'Datos.telefono','Datos.correo',
                'Nacionalidades.descripcion_n','Docentes.clave_d','Asigna_Puestos.passw','Asigna_Puestos.id_asigna_puesto'
                ,'Sexos.tipo_sexo','Puestos.descripcion_puesto','Carreras.nombre_carrera','Grupos.no_grupo')
            ->where('clave_d','=','789563')
            ->get();
//dd($users);
        return view('Tutor.Perfil.perfil', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asigna_Puestos  $asigna_Puestos
     * @return \Illuminate\Http\Response
     */
    public function show(Asigna_Puestos $asigna_Puestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asigna_Puestos  $asigna_Puestos
     * @return \Illuminate\Http\Response
     */
    public function edit(Asigna_Puestos $asigna_Puestos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asigna_Puestos  $asigna_Puestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asigna_Puestos $asigna_puesto)
    {
        //

        //$act=$asigna_puesto->all();
        //dd($act);
        //$act->update($request->all());
       // return redirect("TutorPerfil");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asigna_Puestos  $asigna_Puestos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asigna_Puestos $asigna_Puestos)
    {
        //
    }
}
