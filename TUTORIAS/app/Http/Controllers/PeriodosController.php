<?php

namespace App\Http\Controllers;

use App\Periodos;
use Illuminate\Http\Request;

class PeriodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $periodos=Periodos::orderby('id_periodo')->get();
        return view("Administrador.Periodos.periodos",compact('periodos'));

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
        $periodo=array('periodo'=>$request->descripcion_pe);
        Periodos::create($periodo);
        return redirect("Administrador/periodos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function show(Periodos $periodos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodos $periodos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodos $periodo)
    {
        //
        $periodo->update($request->all());
        return redirect("Administrador/periodos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Periodos::destroy($id);
        return redirect("Administrador/periodos");
    }
}
