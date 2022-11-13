@extends('layouts.general')

@section('content')
        <link >
        <div class="card">
            <div class="card-body">
              <h3 id="tittle_C" class="card-title">Departamentos</h3>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo Departamento</button>

                <!-- Modal -->
                <div class="modal fade  m" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Crear Departamento</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/departament') }}" method="POST">
                                <div class="modal-body">
                                    @csrf
                                        <label for="nameDepartament">Nombre del Departamento:</label>
                                        <input type="text" name="nameDepartament">
                                </div>
                                <div class="modal-body">
                                    @csrf
                                        <label for="city_id">Ciudad</label>
                                        <input type="text" name="city_id">
                                </div>
                                <div class="modal-body">
                                    @csrf
                                        <label for="country_id">Pais</label>
                                        <input type="text" name="country_id">
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
                <th scope="col">Nombre del Departamento</th>
                <th>Ciudad</th>
                <th>Pais</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departament as $depa)
                <tr>
                    <td>{{$depa->nameDepartament}}</td>
                    <td>{{$depa->city_id}}</td>
                    <td>{{$depa->country_id}}</td>
                    <td>
                            <a href="{{ url('/departament/'.$depa->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table with hoverable rows -->

    </div>
</div>
@endsection