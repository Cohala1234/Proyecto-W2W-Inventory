@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/typeClient/'.$tyCEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="typeClient" class="form-label">Tipo Cliente</label>
                            <input type="text" class="form-control" id="inputNanme4" name="typeClient" value="{{ $tyCEdit->typeClient }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/typeClient') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection