<!--Modal eliminar-->
<div class="modal fade" id="ModalEliminar{{$carrera->id_carrera}}" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{url("Administrador/carreras")."/".$carrera->id_carrera}}" method="post">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Carrera</h5>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    Se va a eliminar de la lista la carrera <b>{{$carrera->nombre_carrera}}</b>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning" style="color: #1b1e21">Confirmar</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</div>