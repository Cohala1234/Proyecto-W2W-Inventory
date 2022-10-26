@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/country/'.$nameCedit->id) }}" method="POST">
                <div class="modal-body">
                  <!-- linea de seguridad -->
                    @csrf
                 <!-- metodo editar -->   {{ method_field('PUT') }}
                        <div class="col-8">
                              <h1>Actualizar:</h1>
                            <label for="nameCountry" class="form-label">Pais</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameCountry" value="{{ $nameCedit->nameCountry }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/country') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection