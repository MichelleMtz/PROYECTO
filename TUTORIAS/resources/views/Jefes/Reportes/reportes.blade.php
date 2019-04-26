@extends ('Jefes.layout')
@section('content-personales')
    <h4 class="text-center" style="margin-top: 1.5em;margin-bottom: 1.5em;"><b>Reportes</b></h4>


    <form >
        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Tipo de reporte</label>
            </div>

            <div class="form-group col-4">
                <select type="text" class="form-control">
                    <option>Elige una opcion</option>
                </select>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Semestre</label>
            </div>

            <div class="form-group col-4">
                <select type="text" class="form-control">
                    <option>Elige una opcion</option>
                </select>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Grupo</label>
            </div>

            <div class="form-group col-4">
                <select type="text" class="form-control">
                    <option>Elige una opcion</option>
                </select>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Pregunta</label>
            </div>

            <div class="form-group col-4">
                <select type="text" class="form-control">
                    <option>Elige una opcion</option>
                </select>
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-primary" style="margin-left: 34em">
                    <img src="{{url('imagenes/descarga.png')}}" width="20px" height="20px">
                </button>
            </div>

        </div>


    </form>


    <embed src="imagenes/R.pdf" type="application/pdf" width="100%" height="600px">
    </div>

@endsection
