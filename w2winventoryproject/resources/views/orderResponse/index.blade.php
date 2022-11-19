@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order Response</h5>
            @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear Order Response</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear Order Response</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('orderResponse.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                    <div class="col-12">
                                        <label for="nameClient" class="form-label">Nombre de la respuesta</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="orderActivityResponse">
                                    </div>

                                    <div class="col-12">
                                        <label for="phoneClient" class="form-label">General Activity</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="general_activity_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="mailClient" class="form-label">Response Activity</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="response_activity_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="mailClient" class="form-label">Work Order</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="work_order_id">
                                    </div>
                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>           
            <!-- Table with hoverable rows -->
            <div class="row">
            @foreach($orderResponse as $orderResp)
                
                        <div class="card-footer bg-transparent border-dark">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$orderResp->orderActivityResponse}}</li>
                                <li class="list-group-item">{{$orderResp->general_activity_id}}</li>
                                <li class="list-group-item">{{$orderResp->response_activity_id}}</li>
                                <li class="list-group-item">{{$orderResp->work_order_id}}</li>
                            </ul>
                            <a href="{{ url('/orderResponse/'.$orderResp->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </div>
            @endforeach   
        </div>
            <!-- End Table with hoverable rows -->
        </div>
    </div>
@endsection