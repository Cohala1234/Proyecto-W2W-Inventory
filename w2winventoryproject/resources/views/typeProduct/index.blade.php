@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tipo de Productos</h5>
            <!--@if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif-->
            <div id="success_message"></div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear tipo producto</button>
            <!-- Modal TypeProduct Create-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear tipo producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="formulario" method="POST">
                            <div class="modal-body">
                                <ul id="saveform_errList"></ul>
                                @csrf
                                    <div class="col-12">
                                        <label for="nameTypeProduct" class="form-label">Tipo Producto</label>
                                        <input type="text" class="form-control nameTypeProduct" id="inputNanme4" name="nameTypeProduct">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Modal TypeProduct Create-->
            
            <!-- Modal TypeProduct Edit-->
            <div class="modal fade" id="EditTyProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Editar tipo producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="formulario" method="POST">
                            <div class="modal-body">
                                <ul id="updateform_errList"></ul>
                                <input type="hidden" id="edit_tyProduct_id">
                                @csrf
                                    <div class="col-12">
                                        <label for="nameTypeProduct" class="form-label">Tipo Producto</label>
                                        <input type="text" id="edit_nameTypeProduct" class="form-control nameTypeProduct" id="inputNanme4" name="nameTypeProduct">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-warning editar">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Modal TypeProduct Edit-->

            <!-- Modal TypeProduct Delete-->
            <div class="modal fade" id="DeleteTyProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Eliminar tipo producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="delete_tyProduct_id">
                            <h3>¿Esta seguro que desea eliminar este registro?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger eliminar">Si, eliminar</button>
                        </div>
                    </div>
                </div>
            </div><!-- End Modal TypeProduct Delete-->

            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tipo Producto</th>
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

            fetchtypeproduct();
            /* funcion para mostrar en una tabla los datos de la tabla */
            function fetchtypeproduct()
            {
                $.ajax({
                    type: "GET",
                    url: "/fetch-typeProduct",
                    dataType: "json",
                    success:function(response){
                        //console.log(response.typeUsers);
                        $('tbody').html("");
                        $.each(response.typeProducts, function(key, item) {
                            $('tbody').append('<tr>\
                                <td>'+item.nameTypeProduct+'</td>\
                                <td><button type="button" value="'+item.id+'" class="btn btn-warning editTPr">Editar</button></a>\
                                    <button type="button" value="'+item.id+'" class="btn btn-danger deleteTPr">Eliminar</button></a></td>\
                                </tr>')
                        });
                    }
                });
            }

            /* eliminar un campo de la base de datos */
            $(document).on('click','.deleteTPr', function(e){
                e.preventDefault();
                var tyProduct_id = $(this).val();
                //alert(uniMeasurement_id);
                $('#delete_tyProduct_id').val(tyProduct_id);
                $('#DeleteTyProductModal').modal('show');

            });

            /* evento para eliminar */
            $(document).on('click','.eliminar', function(e){
                e.preventDefault();
                $(this).text("Eliminando");
                var tyProduct_id = $('#delete_tyProduct_id').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete-typeProduct/"+tyProduct_id,
                    success:function(response){
                        //console.log(response);
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#DeleteTyProductModal').modal('hide');
                        $(".eliminar").text("Si, Eliminar");

                        fetchtypeproduct();
                    }
                });
                
            });

            /* abrir modal de editar */
            $(document).on('click','.editTPr', function(e){
                e.preventDefault();
                var tyProduct_id = $(this).val();
                //console.log(uniMeasurement_id);
                $('#EditTyProductModal').modal('show')

                $.ajax({
                    type: "GET",
                    url: "/edit-typeProduct/"+tyProduct_id,
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
                            $('#edit_nameTypeProduct').val(response.typeProduct.nameTypeProduct);
                            $('#edit_tyProduct_id').val(tyProduct_id);
                        }
                    }
                });
            });

            /* evento para editar */
            $(document).on('click','.editar', function(e){
                e.preventDefault();

                $(this).text("Actualizando");

                var tyProd_id = $('#edit_tyProduct_id').val();
                var data = {
                    'nameTypeProduct':$('#edit_nameTypeProduct').val()
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "update-typeProduct/"+tyProd_id,
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
                            $('#EditTyProductModal').modal('hide');
                            $(".editar").text("Actualizar");

                            fetchtypeproduct();
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
                    url: "/typeProduct",
                    data: {
                        'nameTypeProduct': $('.nameTypeProduct').val(), 
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

                            fetchtypeproduct();
                        }
                    }
                });
            });
        });
    </script>
@endsection