<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">


    <title>@yield('title')</title>
</head>
<body class="bg-white">

    <header id="header">

        <div>
            <img class="ima2" src="{{asset("imagenes/edomex.png")}}" align="" width="100em" height="50em">
            <img class="ima2" src="{{asset('imagenes/edom.png')}}" width="50em" height="50em">
            <img class="ima2" src="{{asset('imagenes/TecNM.png')}}" width="100em" height="50em">
            <img class="ima2" src="{{asset('imagenes/TESVB.png')}}" width="105em" height="50em">
            <h3 id="htec"> <b>Tecnológico de Estudios Superiores de Valle de Bravo</b></h3>
            <h4 id="saet"> SAET (Sistema de Análisis del Expediente del tutorado)</h4>

        </div>
    </header>

    <section class="container">
        @yield('content')

    </section>


    <footer id="footer">

        <div class="text-black-50 text-center ">
            <h6 id="textfo">
                <p>Km. 30 de la carretera federal monumento-Valle de Bravo, Ejido de San Antonio de la Laguna
                    <br>Valle de Bravo, Estado de Mexico, C.P. 51200</p>
            </h6>

        </div>


    </footer>
    <script src="{{asset('js/app.js')}}" ></script>
    <script src="{{asset('components/bootstrap.js')}}" ></script>
</body>
</html>