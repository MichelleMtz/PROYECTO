<?php

namespace App\Http\Controllers;

use App\TutorTutorados;
use App\Datos;
use App\Asigna_Puestos;


use Illuminate\Http\Request;

class TutorTutoradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grupo=Asigna_Puestos::join('Docentes','Docentes.id_docente','=','Asigna_Puestos.id_docente')
            ->select('Asigna_Puestos.id_grupo')
            ->where('clave_d','=','789563')
            ->get();

        $Alumnos = Datos::orderby('Datos.apellido_paterno')
            ->join('Sexos','Datos.id_sexo','=','Sexos.id_sexo')
            ->join('Alumnos','Alumnos.id_dato','=','Datos.id_dato')
            ->join('Asigna_Semestres','Asigna_Semestres.id_alumno','=','Alumnos.id_alumno')
            ->join('Semestres','Semestres.id_semestre','=','Asigna_Semestres.id_semestre')
            ->join('Carreras','Carreras.id_carrera','=','Alumnos.id_carrera')
            ->join('Grupos','Grupos.id_grupo','=','Asigna_Semestres.id_grupo')
            ->select( 'Alumnos.no_cuenta','Datos.nombre','Datos.apellido_paterno','Datos.apellido_materno', 'Datos.telefono','Datos.correo',
                'Sexos.tipo_sexo','Carreras.nombre_carrera','Grupos.no_grupo')
            ->where('Asigna_Semestres.id_grupo','=','1')
            ->where('Alumnos.id_carrera','=','1')
            ->get();

        //dd($Alumnos);
        return view('Tutor.Tutorados.tutorados',compact('Alumnos'));
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
     * @param  \App\TutorTutorados  $tutorTutorados
     * @return \Illuminate\Http\Response
     */
    public function show(TutorTutorados $tutorTutorados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TutorTutorados  $tutorTutorados
     * @return \Illuminate\Http\Response
     */
    public function edit(TutorTutorados $tutorTutorados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TutorTutorados  $tutorTutorados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorTutorados $tutorTutorados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TutorTutorados  $tutorTutorados
     * @return \Illuminate\Http\Response
     */
    public function destroy(TutorTutorados $tutorTutorados)
    {
        //
    }
}
