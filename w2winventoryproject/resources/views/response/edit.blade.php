@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/response/'.$responseEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameSection" class="form-label">Nombre Response</label>
                            <input type="text" class="form-control" id="inputNanme4" name="response" value="{{ $responseEdit->response }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/response') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection