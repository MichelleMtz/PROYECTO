@extends ('Administrador.layoutA')
@section('active_puestos','active')
@section('content-admin')
    <h4 class="text-center" style="margin-top: 1.5em; margin-bottom: 1.5em;"><b>Puestos</b></h4>

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
                <th scope="col">Id puestos</th>
                <th scope="col">Descripcion</th>
                <th colspan="2">Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($puestos as $puesto)
                <tr>
                    <td>{{$puesto->id_puesto}}</td>
                    <td>{{$puesto->descripcion_puesto}}</td>
                    <td>
                        <a href="" class="btn btn-outline-primary btn">
                            <img src="{{url('imagenes/edit.png')}}" alt="" width="15px" height="15px">
                        </a>
                    </td>

                    <td>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#ModalEliminar">
                            <img src="{{url('imagenes/trash.png')}}" width="15px" height="15px">
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

    <!-- ********MODAL AGREGAR****** -->
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
        <form method="post" action="{{url("Administrador/puestos")}}">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro de puestos</h5>
                    </div>
                    <div class="modal-body">

                        @csrf

                        <div class="form-row">

                            <div class="form-group col-6">
                                <label for="inputno">Puestos</label>
                                <input type="text" class="form-control" id="inputno" name="descripcion_pu" placeholder="Nombre">
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

    <!--Modal eliminar-->
    <div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="{{url("Administrador/puestos")."/".$puesto->id_puesto}}" method="post">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Eliminar Puesto</h5>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('DELETE')
                        Se va a eliminar de la lista
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning" style="color: #1b1e21">Confirmar</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection