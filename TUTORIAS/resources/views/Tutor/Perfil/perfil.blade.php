
@extends('Tutor.layout')
@section('title','Perfil')
@section('active_perfil','active')
@section('Content2')


    <H4 id="textDatos" class="text-center" style="margin-top: 1.5em; "><b>Datos Personales</b></H4>
    @foreach($users as $user)
        <form method="post" action="{{route("TutorPerfil.update",$user->id_asigna_puesto)}}">
            @csrf
            @method("PUT")

                <div class="form-row">
                    <div class="form-group col-4">
                        <label for="inputnombre">Nombre</label>
                        <input type="text" class="form-control" value="{{$user->nombre}}" id="inputnombre">
                    </div>
                    <div class="form-group col-4">
                        <label for="inputap">Apellido Paterno</label>
                        <input type="text" class="form-control" value="{{$user->apellido_paterno}}" id="inputap">
                    </div>
                    <div class="form-group col-4">
                        <label for="inputam">Apellido Materno</label>
                        <input type="text" class="form-control" value="{{$user->apellido_materno}}" id="inputam">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-2">
                        <label for="inputNacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" value="{{$user->descripcion_n}}" id="inputNacionalidad">
                    </div>
                    <div class="col-3 form-group">
                        <label for="inputTelefono"> Telefono </label>
                        <input type="text" class="form-control" value="{{$user->telefono}}" id="inputTelefono">
                    </div>
                    <div class="form-group col-4">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" value="{{$user->correo}}" id="email">
                    </div>
                    <div class="form-group col-2">
                        <label for="inputgenero">Genero</label>
                        <input type="text" class="form-control" value="{{$user->tipo_sexo}}" id="inputgenero">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-5">
                        <label for="inputcarrera">Carrera</label>
                        <input type="text" readonly class="form-control" value="{{$user->nombre_carrera}}" id="inputcarrera">
                    </div>
                    <div class="form-group col-2">
                        <label for="inputGrupo">Grupo de Tutorías</label>
                        <input type="text" id="inputGrupo" readonly value="{{$user->no_grupo}}" class="form-control">
                    </div>
                    <div class="form-group col-3">
                        <label for="inputusuario">Usuario</label>
                        <input type="text" id="inputusuario" readonly value="{{$user->clave_d}}" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-3">
                        <label for="inputcontra">Contraseña</label>
                        <input type="password" id="inputcontra" value="{{$user->passw}}" class="form-control">
                    </div>
                    <div class="form-group col-3">
                        <label for="inputconfirmcontra">Confirmar contraseña</label>
                        <input type="password" name="passw" id="inputconfirmcontra" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-7 text-right">
                        <button id="btngperfil" type="submit" class="btn btn-outline-warning" style="color: #1b1e21; margin-top: 1.5em;
                         margin-right: 1.5em;">Cambiar contraseña</button>
                    </div>
                    <!--<div class="form-group col-6 text-left">
                        <button id="btncperfil" class="btn btn-outline-danger" style="margin-top: 1.5em;
                         margin-right: 1.5em;">Cancelar</button>
                    </div>-->
                </div>

        </form>
    @endforeach
@endsection