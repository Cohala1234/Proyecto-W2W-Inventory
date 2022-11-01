@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
            @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear Clientes</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear Clientes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/client') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                    <div class="col-12">
                                        <label for="nameClient" class="form-label">Nombre del Cliente</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="nameClient">
                                    </div>

                                    <div class="col-12">
                                        <label for="phoneClient" class="form-label">Telefono del cliente</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="phoneClient">
                                    </div>

                                    <div class="col-12">
                                        <label for="mailClient" class="form-label">Correo electronico</label>
                                        <input type="email" class="form-control" id="inputNanme4" name="mailClient">
                                    </div>

                                    <div class="col-12">
                                        <label for="type_client_id" class="form-label">Tipo de cliente</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="type_client_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="user_id" class="form-label">usuario</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="user_id">
                                    </div>


                                    <div class="col-12">
                                        <label for="sector_master_id" class="form-label">Sector</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="sector_master_id">
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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre del Cliente</th>
                        <th scope="col">Telefono del cliente</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col">Tipo de cliente</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Sector</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($client as $cl)
                    <tr>
                        <td>{{$cl->nameClient}}</td>
                        <td>{{$cl->phoneClient}}</td>
                        <td>{{$cl->mailClient}}</td>
                        <td>{{$cl->type_client_id}}</td>
                        <td>{{$cl->user_id}}</td>
                        <td>{{$cl->sector_master_id}}</td>
                        <td>
                            <a href="{{ url('/client/'.$cl->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $client->links() !!}
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection