@extends('layout.layout')
@section('content')

    <div class="container">
        <ul class="nav nav-tabs" role="tablist" id="myTab">

            <li class="nav-item" >
                <a class="nav-link @yield("active_carreras")" id="home-tab" role="tab" data-toogle="tab" href="/Administrador/carreras">Carreras</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link @yield("active_puestos")"  role="tab" data-toogle="tab" href="/Administrador/puestos" >Puestos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_periodos")" role="tab" data-toogle="tab" href="/Administrador/periodos" >Periodos</a>
            </li>
        </ul>
    </div>


    <section class="container">
        @yield('content-admin')
    </section>
@endsection









