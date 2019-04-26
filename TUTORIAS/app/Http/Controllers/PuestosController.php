<?php

namespace App\Http\Controllers;

use App\Periodos;
use App\Puestos;
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $puestos=Puestos::orderby('id_puesto')->get();
        return view("Administrador.Puestos.puestos",compact('puestos'));
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
        $puesto=array('descripcion_puesto'=>$request->descripcion_pu);
        Puestos::create($puesto);
        return redirect("Administrador-puestos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function show(Puestos $puestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function edit(Puestos $puestos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puestos $puestos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Puestos::destroy($id);
        return redirect("Administrador-puestos");
    }
}
