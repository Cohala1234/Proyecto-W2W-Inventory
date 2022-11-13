@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/warehouse/'.$warehouseEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="direction" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="inputNanme4" name="direction" value="{{ $warehouseEdit->direction }}">
                        </div>

                        <div class="col-8">
                            <label for="client_id" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="inputNanme4" name="client_id" value="{{ $warehouseEdit->client_id }}">
                        </div>

                        <div class="col-8">
                            <label for="section_id" class="form-label">Seccion</label>
                            <input type="text" class="form-control" id="inputNanme4" name="section_id" value="{{ $warehouseEdit->section_id }}">
                        </div>

                        <div class="col-8">
                            <label for="site_id" class="form-label">Sitio</label>
                            <input type="text" class="form-control" id="inputNanme4" name="site_id" value="{{ $warehouseEdit->site_id }}">
                        </div>

                        
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/warehouse') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection