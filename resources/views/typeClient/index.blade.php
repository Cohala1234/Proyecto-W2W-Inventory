@extends('layouts.general')

@section('content') 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tipo Clientes</h5>
                @if(Session::has('message'))

                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message')}}
                    </div>

                @endif
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear tipo cliente</button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Crear tipo Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/typeClient') }}" method="POST">
                                <div class="modal-body">
                                    @csrf
                                    <div class="col-12">
                                        <label for="typeClient" class="form-label">Tipo Cliente</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="typeClient">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <th scope="col">Tipo Cliente</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($typeC as $tyC)
                        <tr>
                            <td>{{$tyC->typeClient}}</td>
                            <td>
                                <a href="{{ url('/typeClient/'.$tyC->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <!-- End Table with hoverable rows -->

            </div>
        </div>
@endsection