@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Almacenes</h5>
            @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear Almacen</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear Almacen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/warehouse') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                    <div class="col-12">
                                        <label for="direction" class="form-label">Direccion</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="direction">
                                    </div>

                                    <div class="col-12">
                                        <label for="client_id" class="form-label">Cliente</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="client_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="section_id" class="form-label">Seccion</label>
                                        <input type="email" class="form-control" id="inputNanme4" name="section_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="site_id" class="form-label">Sitio</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="site_id">
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
                        <th scope="col">Direccion</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Seccion</th>
                        <th scope="col">Sitio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($warehouse as $wr)
                    <tr>
                        <td>{{$wr->direction}}</td>
                        <td>{{$wr->client_id}}</td>
                        <td>{{$wr->section_id}}</td>
                        <td>{{$wr->site_id}}</td>
                        <td>
                            <a href="{{ url('/warehouse/'.$wr->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $warehouse->links() !!}
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection