<?php

namespace App\Http\Controllers;

use App\TutoresCoordinadores;
use Illuminate\Http\Request;

class TutoresCoordinadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Jefes.Tutores-coordinador.tutores-coordinador');
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
     * @param  \App\TutoresCoordinadores  $tutoresCoordinadores
     * @return \Illuminate\Http\Response
     */
    public function show(TutoresCoordinadores $tutoresCoordinadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TutoresCoordinadores  $tutoresCoordinadores
     * @return \Illuminate\Http\Response
     */
    public function edit(TutoresCoordinadores $tutoresCoordinadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TutoresCoordinadores  $tutoresCoordinadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutoresCoordinadores $tutoresCoordinadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TutoresCoordinadores  $tutoresCoordinadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(TutoresCoordinadores $tutoresCoordinadores)
    {
        //
    }
}
