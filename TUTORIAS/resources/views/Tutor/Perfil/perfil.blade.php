
@extends('Tutor.layout')
@section('title','Perfil')
@section('active_perfil','active')
@section('Content2')


    <H4 id="textDatos" class="text-center" style="margin-top: 1.5em; "><b>Datos Personales</b></H4>
        <form action="">

            <div class="form-row">
                <div class="form-group col-4">
                    <label for="inputnombre">Nombre</label>
                    <input type="text" class="form-control" id="inputnombre">
                </div>
                <div class="form-group col-4">
                    <label for="inputap">Apellido Paterno</label>
                    <input type="text" class="form-control" id="inputap">
                </div>
                <div class="form-group col-4">
                    <label for="inputam">Apellido Materno</label>
                    <input type="text" class="form-control" id="inputam">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-2">
                    <label for="inputNacionalidad">Nacionalidad</label>
                    <select type="text" class="form-control" id="inputNacionalidad">
                        <option >Elige una opción</option>
                        <option value="">Mexicana</option>
                    </select>
                </div>
                <div class="col-2 form-group">
                    <label for="inputTelefono"> Telefono </label>
                    <input type="text" class="form-control" id="inputTelefono">
                </div>
                <div class="form-group col-3">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-2">
                    <label for="inputgenero">Genero</label>
                    <select type="text" class="form-control" id="inputgenero">
                        <option value="">Femenino</option>
                        <option value="">Masculino</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="inputcarrera">Carrera</label>
                    <input type="text" readonly class="form-control" id="inputcarrera">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-2">
                    <label for="inputGrupo">Grupo de Tutorías</label>
                    <input type="text" id="inputGrupo" readonly class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="inputusuario">Usuario</label>
                    <input type="text" id="inputusuario" readonly class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="inputcontra">Contraseña</label>
                    <input type="password" id="inputcontra" class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="inputconfirmcontra">Confirmar contraseña</label>
                    <input type="password" id="inputconfirmcontra" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-6 text-right">
                    <button id="btngperfil" class="btn btn-outline-warning" style="color: #1b1e21; margin-top: 1.5em;
                     margin-right: 1.5em;">Guardar</button>
                </div>
                <div class="form-group col-6 text-left">
                    <button id="btncperfil" class="btn btn-outline-danger" style="margin-top: 1.5em;
                     margin-right: 1.5em;">Cancelar</button>
                </div>
            </div>
        </form>
@endsection