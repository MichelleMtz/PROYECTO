@extends ('Coordinador-General.layout')
@section('active_categorias','active')
@section('title','Categorias Pregunta')
@section('Content-CG')
    <h4 class="text-center" style="margin-top: 1.5em; margin-bottom: 1.5em;"><b>Categorias de la pregunta</b></h4>

    <section>

        <div class="form-row">
            <div class=" form-group col-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img src="{{asset('imagenes/search1.png')}}" width="20px" height="20px">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="inputsearch" placeholder="Search">
                </div>
            </div>

            <div class="form-group col-4">
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalAgregar" style="margin-left: 30em;">
                    <img src="{{asset('imagenes/add.png')}}" width="15px" height="15px">
                </button>
            </div>
        </div>

        <table id="tab" class="table  col-12"> <!--style="margin-left: 10em"-->
            <thead class="thead-light">
            <tr>
                <th scope="col" style="display: none";>Id</th>
                <th scope="col">Categoria</th>
                <th colspan="2" class="col-2">Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td style="display: none">{{$categoria->id_categoria}}</td>
                    <td>{{$categoria->nombre_catego}}</td>
                    <td><a href="" class="btn btn-outline-primary btn">
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

    <!--Modal agregar-->
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
        <form method="post" action="{{url("CoordinadorG/CategoriaPregunta")}}">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro de categorias</h5>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputno">Nombre de la categoria</label>
                                <input type="text" class="form-control" id="inputno" name="nombre_catp" placeholder="">
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
        <form action="{{url("CoordinadorG/CategoriaPregunta")."/".$categoria->id_categoria}}" method="post">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Eliminar Categoria</h5>
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