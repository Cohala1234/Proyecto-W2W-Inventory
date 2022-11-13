@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 id="tittle_C" class="card-title">Paises</h3>
            <!-- Button trigger modal -->
            <div id="success_message"></div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear país</button>
            <!-- Modal Country Create-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear país</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="formulario" method="POST">
                            <div class="modal-body">
                                <ul id="saveform_errList"></ul>
                                @csrf
                                <div class="col-12">
                                    <label for="nameCountry" class="form-label">Pais</label>
                                    <input type="text" class="form-control nameCountry" id="inputNanme4" name="nameCountry">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Modal Country Create-->

            <!-- Modal Country Edit-->
            <div class="modal fade" id="EditCountryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Editar país</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="formulario" method="POST">
                            <div class="modal-body">
                                <ul id="updateform_errList"></ul>
                                <input type="hidden" id="edit_country_id">
                                @csrf
                                <div class="col-12">
                                    <label for="nameCountry" class="form-label">Pais</label>
                                    <input type="text" id="edit_country" class="form-control nameCountry" id="inputNanme4" name="nameCountry">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-warning editar">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Modal Country Edit-->

            <!-- Modal Country Delete-->
            <div class="modal fade" id="DeleteCountryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Eliminar país</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="delete_country_id">
                            <h3>¿Esta seguro que desea eliminar este registro?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger eliminar">Si, eliminar</button>
                        </div>
                    </div>
                </div>
            </div><!-- End Modal Country Edit-->

            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Nombre del pais</th>
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

            fetchcountry();

            /* funcion para mostrar en una tabla los datos de la tabla */
            function fetchcountry()
            {
                $.ajax({
                    type: "GET",
                    url: "/fetch-country",
                    dataType: "json",
                    success:function(response){
                        //console.log(response.typeUsers);
                        $('tbody').html("");
                        $.each(response.countries, function(key, item) {
                            $('tbody').append('<tr>\
                                <td>'+item.nameCountry+'</td>\
                                <td><button type="button" value="'+item.id+'" class="btn btn-warning editCountry">Editar</button></a>\
                                    <button type="button" value="'+item.id+'" class="btn btn-danger deleteCountry">Eliminar</button></a></td>\
                                </tr>')
                        });
                    }
                });
            }

            /* eliminar un campo de la base de datos */
            $(document).on('click','.deleteCountry', function(e){
                e.preventDefault();
                var country_id = $(this).val();
                //alert(uniMeasurement_id);
                $('#delete_country_id').val(country_id);
                $('#DeleteCountryModal').modal('show');

            });

            /* evento para eliminar */
            $(document).on('click','.eliminar', function(e){
                e.preventDefault();
                $(this).text("Eliminando");
                var country_id = $('#delete_country_id').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete-country/"+country_id,
                    success:function(response){
                        //console.log(response);
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#DeleteCountryModal').modal('hide');
                        $(".eliminar").text("Si, Eliminar");

                        fetchcountry();
                    }
                });
                
            });

            /* abrir modal de editar */
            $(document).on('click','.editCountry', function(e){
                e.preventDefault();
                var country_id = $(this).val();
                //console.log(uniMeasurement_id);
                $('#EditCountryModal').modal('show')

                $.ajax({
                    type: "GET",
                    url: "/edit-country/"+country_id,
                    success:function(response){
                        //console.log(response);
                        if (response.status == 404) 
                        {
                            $('success_message').html("");
                            $('success_message').addClass('alert alert-danger');
                            $('success_message').text(response.message);
                        }
                        else
                        {
                            $('#edit_country').val(response.country.nameCountry);
                            $('#edit_country_id').val(country_id);
                        }
                    }
                });
            });

            /* evento para editar */
            $(document).on('click','.editar', function(e){
                e.preventDefault();

                $(this).text("Actualizando");

                var country_id = $('#edit_country_id').val();
                var data = {
                    'nameCountry':$('#edit_country').val()
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "update-country/"+country_id,
                    data: data,
                    dataType: "json",
                    success:function(response){
                        //console.log(response);
                        if (response.status == 400) 
                        {
                            //errors
                            $('#updateform_errList').html("");
                            $('#updateform_errList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_values) {
                                $('#updateform_errList').append('<li>'+err_values+'</li>')
                            });
                            $(".editar").text("Actualizar");
                        } 
                        else if (response.status == 404) 
                        {
                            $('#updateform_errList').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $(".editar").text("Actualizar");
                        } 
                        else
                        {
                            $('#updateform_errList').html("");
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#EditCountryModal').modal('hide');
                            $(".editar").text("Actualizar");

                            fetchcountry();
                        }
                    }
                });
            });
            
            /* evento para crear un registro */
            $(document).on('click','.guardar', function(e){
                e.preventDefault();
                //console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/country",
                    data: {
                        'nameCountry': $('.nameCountry').val(), 
                    },
                    dataType: "json",
                    success:function(response){
                        //console.log(response);
                        if(response.status == 400)
                        {
                            $('#saveform_errList').html("");
                            $('#saveform_errList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_values) {
                                $('#saveform_errList').append('<li>'+err_values+'</li>')
                            });
                        }
                        else
                        {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#staticBackdrop').modal('hide');
                            $('#staticBackdrop').find('input').val("");

                            fetchcountry();
                        }
                    }
                });
            });
        });
    </script>
@endsection