<!--Modal eliminar-->
<div class="modal fade" id="ModalEliminar{{$puesto->id_puesto}}" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{url("Administrador/puestos")."/".$puesto->id_puesto}}" method="post">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Puesto</h5>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    Se va a eliminar de la lista el puesto <b>{{$puesto->descripcion_puesto}}</b>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning" style="color: #1b1e21">Confirmar</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</div>