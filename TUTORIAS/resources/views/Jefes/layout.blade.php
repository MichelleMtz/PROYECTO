
@extends ('layout.layout')
@section('content')

    <header class="bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url("Jefes-personales")}}">Perfil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria- label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url("tutores-coordinador")}}">Tutores/coordinadores <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("Jefes/estadisticas")}}">Estadisticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("Jefes-reportes")}}">Reportes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container">
        @yield('content-personales')
    </section>
@endsection
