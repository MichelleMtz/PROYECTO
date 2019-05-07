@extends('Tutor.layout')
@section('title','Tutorados')
@section('active_tutorados','active')
@section('Content2')

    <H4 class="text-center" style="margin-top: 1em; margin-bottom: 1em; "><b>Tutorados</b></H4>
    <form action="">
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
            <!--<div class="form-group col-6">
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalAgregar" style="margin-left: 17em;">
                        <img src="{{url('imagenes/add.png')}}" width="15px" height="15px">

                    </button>
                    <button type="button" class="btn btn-outline-warning" style="margin-left: 1.5em;" data-toggle="modal" data-target="#ModalModificar">
                        <img src="{{url('imagenes/edit.png')}}" width="15px" height="15px">
                    </button>
                    <button type="button" class="btn btn-outline-danger" style="margin-left: 1.5em;" data-toggle="modal" data-target="#ModalEliminar">
                        <img src="{{url('imagenes/sub.png')}}" width="15px" height="15px">
                    </button>
                    <button type="button" class="btn btn-outline-primary" style="margin-left: 1.5em;" data-toggle="modal" data-target="#ModalVer">
                        <img src="{{url('imagenes/eye1.png')}}" width="15px" height="15px">
                    </button>
            </div>-->
        </div>
        <div class="form-row col-12">

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No. cuenta</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Género</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Expediente</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($Alumnos as $Alumno)
                        <tr>
                            <th scope="row">{{$Alumno->no_cuenta}}</th>
                            <td>{{$Alumno->nombre}}</td>
                            <td>{{$Alumno->apellido_paterno}}</td>
                            <td>{{$Alumno->apellido_materno}}</td>
                            <td>{{$Alumno->tipo_sexo}}</td>
                            <td>{{$Alumno->telefono}}</td>
                            <td>{{$Alumno->correo}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary" style="margin-left: 1.5em;" data-toggle="modal" data-target="#ModalVer">
                                    <img src="{{url('imagenes/eye1.png')}}" width="15px" height="15px">
                                </button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </form>


    <!-- ********MODAL AGREGAR****** -->
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro del estudiante</h5>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputno">No de cuenta</label>
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
                                <label for="inputcorreo">Correo electrónico</label>
                                <input type="text" class="form-control" id="inputcorreo">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputgen">Género</label>
                                <select type="text" class="form-control" id="inputgen">
                                    <option value="">Femenino</option>
                                    <option value="">Masculino</option>
                                </select>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning text-black">Guardar</button>
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
                    <h5 class="modal-title">Modificar estudiante</h5>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputno">No de cuenta</label>
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
                                <label for="inputcorreo">Correo electrónico</label>
                                <input type="text" class="form-control" id="inputcorreo">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputgen">Género</label>
                                <select type="text" class="form-control" id="inputgen">
                                    <option value="">Femenino</option>
                                    <option value="">Masculino</option>
                                </select>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" style="color: #1b1e21" >Actualizar</button>
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
                    <h5 class="modal-title">Eliminar estudiante</h5>
                </div>
                <div class="modal-body">
                    El estudiante se va a eliminar de la lista
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" style="color: #1b1e21">Confirmar</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal VER -->
    <div class="modal fade" id="ModalVer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Expediente del Tutorado</h5>
                </div>
                <div class="modal-body">
                    <form action="">
                        <textarea class="form-control" rows="3"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" >Descargar</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

@endsection