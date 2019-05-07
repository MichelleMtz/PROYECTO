<div class="modal fade" id="ModalEliminar{{$periodo->id_periodo}}" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{url("Administrador/periodos")."/".$periodo->id_periodo}}" method="post">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Periodo</h5>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    Se va a eliminar de la lista el periodo <b>{{$periodo->periodo}}</b>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning" style="color: #1b1e21">Confirmar</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</div>