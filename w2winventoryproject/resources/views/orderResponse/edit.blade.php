@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/orderResponse/'.$orderResponseEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameClient" class="form-label">Nombre de la respuesta</label>
                            <input type="text" class="form-control" id="inputNanme4" name="orderActivityResponse" value="{{ $orderResponseEdit->orderActivityResponse }}">
                        </div>

                        <div class="col-8">
                            <label for="phoneClient" class="form-label">General Activity</label>
                            <input type="text" class="form-control" id="inputNanme4" name="general_activity_id" value="{{ $orderResponseEdit->general_activity_id }}">
                        </div>

                        <div class="col-8">
                            <label for="mailClient" class="form-label">Response Activity</label>
                            <input type="text" class="form-control" id="inputNanme4" name="response_activity_id" value="{{ $orderResponseEdit->response_activity_id }}">
                        </div>

                        <div class="col-8">
                            <label for="mailClient" class="form-label">Work Order</label>
                            <input type="text" class="form-control" id="inputNanme4" name="work_order_id" value="{{ $orderResponseEdit->work_order_id }}">
                        </div>

                        
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/orderResponse') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection