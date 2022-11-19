@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/generalActivity/'.$generalEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="orderType" class="form-label">Nombre de la orden </label>
                            <input type="text" class="form-control" id="inputNanme4" name="activityName" value="{{ $generalEdit->activityName }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/generalActivity') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection