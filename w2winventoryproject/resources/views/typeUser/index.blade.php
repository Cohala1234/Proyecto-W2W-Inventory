@extends('layouts.general')

@section('content')
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tipo Usuarios</h5>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear tipo usuario</button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Crear tipo usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/typeUser') }}" method="POST">
                                <div class="modal-body">
                                    @csrf
                                        <label for="typeUser">Tipo Usuario</label>
                                        <input type="text" name="typeUser">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo Usuario</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($typeU as $tyU)
                <tr>
                    <th scope="row">{{$tyU->id}}</th>
                    <td>{{$tyU->typeUser}}</td>
                    <td>Editar | Eliminar</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table with hoverable rows -->

    </div>
</div>
@endsection