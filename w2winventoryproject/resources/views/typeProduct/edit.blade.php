@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/typeProduct/'.$tyPEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameTypeProduct" class="form-label">Tipo de Producto</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameTypeProduct" value="{{ $tyPEdit->nameTypeProduct }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/typeProduct') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection