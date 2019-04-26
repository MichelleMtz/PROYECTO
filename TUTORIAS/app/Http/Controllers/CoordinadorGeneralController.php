<?php

namespace App\Http\Controllers;

use App\CoordinadorGeneral;
use Illuminate\Http\Request;

class CoordinadorGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Coordinador-General.layout');
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
     * @param  \App\CoordinadorGeneral  $coordinadorGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(CoordinadorGeneral $coordinadorGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoordinadorGeneral  $coordinadorGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(CoordinadorGeneral $coordinadorGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoordinadorGeneral  $coordinadorGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoordinadorGeneral $coordinadorGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoordinadorGeneral  $coordinadorGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoordinadorGeneral $coordinadorGeneral)
    {
        //
    }
}
