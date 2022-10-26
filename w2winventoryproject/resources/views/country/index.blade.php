@extends('layouts.general')

@section('content')
        <link >
        <div class="card">
            <div class="card-body">
              <h3 id="tittle_C" class="card-title">Paises</h3>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo país</button>

                <!-- Modal -->
                <div class="modal fade  m" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Crear país</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/country') }}" method="POST">
                                <div class="modal-body">
                                    @csrf
                                        <label for="nameCountry">Nombre del país:</label>
                                        <input type="text" name="nameCountry">
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
                <th scope="col">Nombre pais</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nameC as $nmC)
                <tr>
                    <td>{{$nmC->nameCountry}}</td>
                    <td>
                            <a href="{{ url('/country/'.$nmC->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table with hoverable rows -->

    </div>
</div>
@endsection