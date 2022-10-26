@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/typeUser/'.$tyUEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="typeUser" class="form-label">Tipo Usuario</label>
                            <input type="text" class="form-control" id="inputNanme4" name="typeUser" value="{{ $tyUEdit->typeUser }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/typeUser') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection