<?php

namespace App\Http\Controllers;

use App\TutorTutorados;


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
        //$categorias=Categorias::orderby('id_catpreg')->get();
        //return view('categorias.index',compact('categorias'));
        return view('Tutor.Tutorados.tutorados');
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
