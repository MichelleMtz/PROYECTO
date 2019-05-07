@extends ('Administrador.layoutA')
@section('active_carreras','active')
@section('content-admin')
    <h4 class="text-center" style="margin-top: 1.5em; margin-bottom: 1.5em;"><b>Carreras</b></h4>
    <section>
        <div class="form-row">
            <div class=" form-group col-8">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img src="{{url('imagenes/search1.png')}}" width="20px" height="20px">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="inputsearch" placeholder="Search">
                </div>
            </div>
            <div class="form-group col-4">
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalAgregar" style="margin-left: 18em;">
                    <img src="{{url('imagenes/add.png')}}" width="15px" height="15px">
                </button>
            </div>
        </div>

        <table id="tab" class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Id carrera</th>
                <th scope="col">Nombre</th>
                <th colspan="2">Acciones</th>
            </tr>
            </thead>

            <tbody>
                @foreach($carreras as $carrera)
                    <tr>
                        <td>{{$carrera->id_carrera}}</td>
                        <td>{{$carrera->nombre_carrera}}</td>
                        <td>
                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ModalEditar{{$carrera->id_carrera}}">
                                <img src="{{url('imagenes/edit.png')}}" alt="" width="15px" height="15px">
                            </button>
                        <td>
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#ModalEliminar{{$carrera->id_carrera}}">
                                <img src="{{url('imagenes/trash.png')}}" width="15px" height="15px">
                            </button>
                        </td>
                    </tr>
                    @include('Administrador.Carreras.edit')
                    @include('Administrador.Carreras.delete')
                @endforeach
            </tbody>
        </table>
    </section>

    <!-- ********MODAL AGREGAR****** -->
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
        <form method="post" action="{{url("Administrador/carreras")}}">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de carreras</h5>
                </div>
                <div class="modal-body">
                        @csrf
                        <div class="form-row">

                            <div class="form-group col-10">
                                <label for="inputno">Nombre</label>
                                <input type="text" class="form-control" id="inputno" name="nombre_carrera" placeholder="Nombre">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning" style="color: #1b1e21">Guardar</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
        </form>
    </div>

    @endsection



