@extends('Tutor.layout')
@section('active_reportes','active')
@section('title','Reportes')
@section('Content2')
    <h4 class="text-center" style="margin-top: 1em; margin-bottom: 1em;">Reportes</h4>
    <form action="">
        <div class="form-row">
            <div class="form-group col-2">
                <label for="inputPregunta" class="col-form-label">Pregunta</label>
            </div>
            <div class="form-group col-4">
                <select id="inputPregunta" class="form-control" type="text">
                    <option value="">Elige una opción</option>
                </select>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" style="margin-left: 34em;">
                    <img src="{{url('imagenes/descarga.png')}}" width="20px" height="20px">
                </button>
            </div>
        </div>
    </form>
    <embed src="imagenes/R.pdf" type="application/pdf" width="100%" height="600px" />
@endsection