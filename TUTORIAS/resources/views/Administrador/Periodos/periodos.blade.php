@extends ('Administrador.layoutA')
@section('active_periodos','active')
@section('content-admin')
    <h4 class="text-center" style="margin-top: 1.5em; margin-bottom: 1.5em;"><b>Periodos</b></h4>

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
                <th scope="col">Id periodo</th>
                <th scope="col">Periodo</th>
                <th colspan="2">Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($periodos as $periodo)
                <tr>
                    <td>{{$periodo->id_periodo}}</td>
                    <td>{{$periodo->periodo}}</td>
                    <td>
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#ModalEditar{{$periodo->id_periodo}}">
                            <img src="{{url('imagenes/edit.png')}}" alt="" width="15px" height="15px">
                        </button>
                    </td>

                    <td>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#ModalEliminar{{$periodo->id_periodo}}">
                            <img src="{{url('imagenes/trash.png')}}" width="15px" height="15px">
                        </button>
                    </td>
                </tr>
                @include('Administrador.Periodos.edit')
                @include('Administrador.Periodos.delete')
            @endforeach
            </tbody>
        </table>
    </section>

    <!-- ********MODAL AGREGAR****** -->
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
        <form method="post" action="{{url("Administrador/periodos")}}">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro de periodos</h5>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-10">
                                <label for="inputno">Periodo</label>
                                <input type="text" class="form-control" id="inputno" name="descripcion_pe" placeholder="Nombre">
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
