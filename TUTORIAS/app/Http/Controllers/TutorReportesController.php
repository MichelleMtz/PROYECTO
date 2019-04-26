<?php

namespace App\Http\Controllers;

use App\TutorReportes;
use Illuminate\Http\Request;

class TutorReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Tutor.Reportes.reportes');
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
     * @param  \App\TutorReportes  $tutorReportes
     * @return \Illuminate\Http\Response
     */
    public function show(TutorReportes $tutorReportes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TutorReportes  $tutorReportes
     * @return \Illuminate\Http\Response
     */
    public function edit(TutorReportes $tutorReportes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TutorReportes  $tutorReportes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorReportes $tutorReportes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TutorReportes  $tutorReportes
     * @return \Illuminate\Http\Response
     */
    public function destroy(TutorReportes $tutorReportes)
    {
        //
    }
}
