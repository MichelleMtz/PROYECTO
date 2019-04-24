<?php

namespace App\Http\Controllers;

use App\AdministradorLayout;
use Illuminate\Http\Request;

class AdministradorLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Administrador.layoutA');
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
     * @param  \App\AdministradorLayout  $administradorLayout
     * @return \Illuminate\Http\Response
     */
    public function show(AdministradorLayout $administradorLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdministradorLayout  $administradorLayout
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministradorLayout $administradorLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdministradorLayout  $administradorLayout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdministradorLayout $administradorLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdministradorLayout  $administradorLayout
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdministradorLayout $administradorLayout)
    {
        //
    }
}
