@extends ('Jefes.layout')
@section('active_personales','active')
@section('content-personales')

    <h4 class="text-center"><b>Datos personales</b></h4>
        <form>

            <div class="form-row">


                    <div class="form-group col-4">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" name="" placeholder="Nombre">
                    </div>
                    <div class="form-group col-4">
                        <label for="exampleInputPassword1">Apellido paterno</label>
                        <input type="text" class="form-control" name="" placeholder="Apellido paterno">
                    </div>
                <div class="form-group col-4">
                    <label for="exampleInputPassword1">Apellido materno</label>
                    <input type="text" class="form-control" name="" placeholder="Apellido materno">
                </div>
            </div>

            <div class="form-row">


                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Nacionalidad</label>
                    <select type="text" class="form-control">
                        <option>Elige una opcion</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Telefono</label>
                    <input type="text" class="form-control" name="" placeholder="Telefono">
                </div>
                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Correo electronico</label>
                    <input type="text" class="form-control" name="" placeholder="Correo electronico">
                </div>
                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Genero</label>
                    <select type="button" class="form-control">
                        <option>Selecciona una opcion</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                    </select>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Carrera</label>
                    <input type="text" class="form-control" name="" placeholder="Nombre">
                </div>

                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Usuario</label>
                    <input type="text" class="form-control" name="" placeholder="Usuario">
                </div>

                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="" placeholder="Contraseña">
                </div>

                <div class="form-group col-3">
                    <label for="exampleInputPassword1">Confirmar contraseña</label>
                    <input type="password" class="form-control" name="" placeholder="Confirmar contraseña">
                </div>
            </div>



            <div class="form-row">
                <div class="form-group col-6 text-right">
                    <button id="guardar" type="submit" class="btn btn-outline-warning" style="color:
                    #1b1e21;margin-top: 1.5em; margin-rigth:1.5em; ">Guardar</button>
                </div>
                <div class="form-group col-6 text-left">
                    <button id="cancelar" type="submit" class="btn btn-outline-danger" style="margin-top: 1.5em;
                    margin-left:1.5em; ">Cancelar</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
