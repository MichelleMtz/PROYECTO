<!-- ********MODAL EDITAR****** -->
<div class="modal fade" id="ModalEditar{{$periodo->id_periodo}}" tabindex="-1" role="dialog" aria-hidden="true">
    <form method="post" action="{{url("Administrador/periodos")."/".$periodo->id_periodo}}}}">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar periodo</h5>
                </div>
                <div class="modal-body">
                    @csrf
                    @method("PUT")
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputno">Periodo</label>
                            <input type="text" class="form-control" id="inputno" name="periodo" value="{{$periodo->periodo}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning" style="color: #1b1e21">Actualizar</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </form>
</div>
