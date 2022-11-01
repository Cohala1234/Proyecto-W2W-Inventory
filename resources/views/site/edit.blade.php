@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/site/'.$siteEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameSite" class="form-label">Nombre delsitio</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameSite" value="{{ $siteEdit->nameSite }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/site') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection