@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/client/'.$clientEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameClient" class="form-label">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameClient" value="{{ $clientEdit->nameClient }}">
                        </div>

                        <div class="col-8">
                            <label for="phoneClient" class="form-label">Telefono del client</label>
                            <input type="text" class="form-control" id="inputNanme4" name="phoneClient" value="{{ $clientEdit->phoneClient }}">
                        </div>

                        <div class="col-8">
                            <label for="mailClient" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" id="inputNanme4" name="mailClient" value="{{ $clientEdit->mailClient }}">
                        </div>

                        <div class="col-8">
                            <label for="type_client_id" class="form-label">Tipo de cliente</label>
                            <input type="text" class="form-control" id="inputNanme4" name="type_client_id" value="{{ $clientEdit->type_client_id }}">
                        </div>

                        <div class="col-8">
                            <label for="user_id" class="form-label">usuario</label>
                            <input type="text" class="form-control" id="inputNanme4" name="user_id" value="{{ $clientEdit->user_id }}">
                        </div>
                        <div class="col-8">
                            <label for="sector_master_id" class="form-label">Sector</label>
                            <input type="text" class="form-control" id="inputNanme4" name="sector_master_id" value="{{ $clientEdit->sector_master_id }}">
                        </div>

                        
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/client') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection