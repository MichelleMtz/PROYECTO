@extends('layout.layout')
@section('title','Principal')
@section('content')

    <h4></h4>

    <div class="container">
        <ul class="nav nav-tabs" role="tablist" id="myTab">

            <li class="nav-item" >
                <a class="nav-link @yield("active_perfil")" id="home-tab" role="tab" data-toogle="tab" href="#!">Perfil</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link @yield("active_tutorados")"  role="tab" data-toogle="tab" href="#!" >Tutores/Coordinadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_reportes")" role="tab" data-toogle="tab" href="#!" >Formato de tutorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_reportes")" role="tab" data-toogle="tab" href="#!" >Reportes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_categorias")" role="tab" data-toogle="tab" href="{{url('CoordinadorG/CategoriaPregunta')}}" >Categorias</a>
            </li>
        </ul>
    </div>

    <section class="container">

        @yield('Content-CG')
    </section>

@endsection