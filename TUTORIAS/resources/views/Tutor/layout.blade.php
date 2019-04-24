@extends('layout.layout')
@section('title','Perfil')
@section('content')

        <h4></h4>

        <div class="container">
            <ul class="nav nav-tabs" role="tablist" id="myTab">

                <li class="nav-item" >
                    <a class="nav-link @yield("active_perfil")" id="home-tab" role="tab" data-toogle="tab" href="/TutorPerfil">Perfil</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link @yield("active_tutorados")"  role="tab" data-toogle="tab" href="/TutorTutorados" >Tutorados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield("active_reportes")" role="tab" data-toogle="tab" href="/TutorReportes" >Reportes</a>
                </li>
            </ul>
        </div>

        <section class="container">

            @yield('Content2')
        </section>

@endsection