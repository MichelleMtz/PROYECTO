@extends('layout.layout')
@section('title','Perfil')
@section('content')

    <div class="container">
        <ul class="nav nav-tabs" role="tablist" id="myTab">

            <li class="nav-item" >
                <a class="nav-link @yield("active_personales")" id="home-tab" role="tab" data-toogle="tab" href="/Jefes/personales">Perfil</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link @yield("active_tutores-coordinador")"  role="tab" data-toogle="tab" href="/Jefes/tutores-coordinador" >Tutores/coordinadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_reportes")" role="tab" data-toogle="tab" href="/Jefes/reportes" >Reportes</a>
            </li>
        </ul>
    </div>


    <section class="container">
        @yield('content-personales')
    </section>
@endsection




