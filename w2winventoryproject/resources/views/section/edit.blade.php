@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/section/'.$secEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameSection" class="form-label">Nombre de laSeccion</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameSection" value="{{ $secEdit->nameSection }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/section') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection