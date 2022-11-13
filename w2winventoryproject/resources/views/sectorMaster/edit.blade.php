@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/sectorMaster/'.$sectorMasterEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="sectorName" class="form-label">Nombre del sector</label>
                            <input type="text" class="form-control" id="inputNanme4" name="sectorName" value="{{ $sectorMasterEdit->sectorName }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/sectorMaster') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection