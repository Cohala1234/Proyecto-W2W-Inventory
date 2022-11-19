@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/workOrder/'.$workOrderEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameClient" class="form-label">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="inputNanme4" name="workName" value="{{ $workOrderEdit->workName }}">
                        </div>

                        <div class="col-8">
                            <label for="phoneClient" class="form-label">Telefono del client</label>
                            <input type="text" class="form-control" id="inputNanme4" name="order_type_id" value="{{ $workOrderEdit->order_type_id }}">
                        </div>

                        <div class="col-8">
                            <label for="mailClient" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" id="inputNanme4" name="sub_client_id" value="{{ $workOrderEdit->sub_client_id }}">
                        </div>

                        
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/workOrder') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection