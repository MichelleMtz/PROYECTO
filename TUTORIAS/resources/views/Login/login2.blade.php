@extends ('layout.layout')
@section('content')


<style>

    #iniciarsesion{
        margin: 1em 6em;
        margin-bottom: 8em;
    }
    #titulo{
        margin-top: 3em;
    }
</style>

<h4 id="titulo" class="text-center"><b>Inicio de Sesión</b></h4>
<div class="row">
    <div class="col-4 offset-4">
        <form>
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="text" class="form-control" name="" placeholder="Nombre">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="" placeholder="Contraseña">
            </div>
            <button id="iniciarsesion" type="submit" class="btn btn-warning">Iniciar Sesión</button>
        </form>
    </div>
</div>

@endsection