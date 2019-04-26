@extends ('Jefes.layout')
@section('active_tutores-coordinador','active')
@section('content-personales')
<h4 class="text-center" style="margin-top: 1.5em; margin-bottom: 1.5em;"><b>Tutores/coordinador</b></h4>

<form>

    <div class="form-row">
        <div class=" form-group col-6">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <img src="{{url('imagenes/search1.png')}}" width="20px" height="20px">
                    </div>
                </div>
                <input type="text" class="form-control" id="inputsearch" placeholder="Search">
            </div>
        </div>
        <div class="form-group col-6">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalAgregar" style="margin-left: 24em;">
                <img src="{{url('imagenes/add.png')}}" width="15px" height="15px">

            </button>
            <button type="button" class="btn btn-outline-warning" style="margin-left: 1.5em;" data-toggle="modal" data-target="#ModalModificar">
                <img src="{{url('imagenes/edit.png')}}" width="15px" height="15px">
            </button>
            <button type="button" class="btn btn-outline-danger" style="margin-left: 1.5em;" data-toggle="modal" data-target="#ModalEliminar">
                <img src="{{url('imagenes/sub.png')}}" width="15px" height="15px">
            </button>
        </div>
    </div>
    <table id="tab" class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Clave</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Grupo de tutorias</th>
            <th scope="col">Cargo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1562487</th>
            <td>Allisson</td>
            <td>Castillo</td>
            <td>Herrera</td>
            <td>601</td>
            <td>Tutora</td>
        </tr>
        <tr>
            <th scope="row">1628745</th>
            <td>Jacob</td>
            <td>Andrade</td>
            <td>Pineth</td>
            <td>402</td>
            <td>Coordinador</td>
        </tr>
        </tbody>
    </table>
</form>

<!-- ********MODAL AGREGAR****** -->
<div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registro del tutor</h5>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputno">Clave</label>
                            <input type="text" class="form-control" id="inputno">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputnombre">Nombre</label>
                            <input type="text" class="form-control" id="inputnombre">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputap">Apellido Paterno</label>
                            <input type="text" class="form-control" id="inputap">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputam">Apellido Materno</label>
                            <input type="text" class="form-control" id="inputam">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputcorreo">Cargo</label>
                            <select type="text" class="form-control" id="inputgen">
                                <option value="">Tutor</option>
                                <option value="">Coordinador</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputgen">Grupo</label>
                            <select type="text" class="form-control" id="inputgen">
                                <option value="">101</option>
                                <option value="">201</option>
                            </select>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" style="color: #1b1e21">Guardar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<!-- ********MODAL MODIFICAR****** -->
<div class="modal fade" id="ModalModificar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modificar tutor</h5>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputno">Clave</label>
                            <input type="text" class="form-control" id="inputno">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputnombre">Nombre</label>
                            <input type="text" class="form-control" id="inputnombre">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputap">Apellido Paterno</label>
                            <input type="text" class="form-control" id="inputap">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputam">Apellido Materno</label>
                            <input type="text" class="form-control" id="inputam">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputcorreo">Cargo</label>
                            <select type="text" class="form-control" id="inputgen">
                                <option value="">Tutor</option>
                                <option value="">Coordinador</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputgen">Grupo</label>
                            <select type="text" class="form-control" id="inputgen">
                                <option value="">101</option>
                                <option value="">201</option>
                            </select>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" style="color: #1b1e21">Actualizar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal ELIMINAR -->
<div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar tutor</h5>
            </div>
            <div class="modal-body">
                El tutor se va a eliminar de la lista
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" style="color: #1b1e21">Confirmar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@endsection
