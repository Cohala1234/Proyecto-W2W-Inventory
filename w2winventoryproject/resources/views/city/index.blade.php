@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ciudades</h5>
            <!--@if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif-->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear tipo usuario</button>
            <!-- Modal Cities Create -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear Ciudad</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="formulario" method="POST">
                            <div class="modal-body">
                                @csrf
                                    <div class="col-12">
                                        <label for="nameCity" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="nameCity">
                                    </div>

                                    <div class="col-12">
                                        <label for="country_id" class="form-label">Paises</label>
                                        <select name="country_id" id="country_id" class="form-select">
                                            <option value="">Seleccione una opcion..</option>
                                            
                                        </select>
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
                        <th scope="col">Ciudades</th>
                        <th scope="col">Paises</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection

@section('scripts')

<!-- Script Ajax -->
    <script>
        $(document).ready(function(){

            fetchunitymeasurement();
            /* funcion para mostrar en una tabla los datos de la tabla */
            function fetchunitymeasurement()
            {
                $.ajax({
                    type: "GET",
                    url: "/fetch-city",
                    dataType: "json",
                    success:function(response){
                        console.log(response.cities);
                        $('tbody').html("");
                        $.each(response.cities,countries, function(key, item) {
                            $('tbody').append('<tr>\
                                <td>'+item.nameCity+'</td>\
                                <td>'+item.nameCountry+'</td>\
                                <td><button type="button" value="'+item.id+'" class="btn btn-warning editUMe">Editar</button></a>\
                                    <button type="button" value="'+item.id+'" class="btn btn-danger deleteUMe">Eliminar</button></a></td>\
                                </tr>')
                        });
                    }
                });
            }
        });
    </script>
@endsection