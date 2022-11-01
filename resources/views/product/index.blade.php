@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Productos</h5>
            @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear Productos</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear Productos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/product') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                    <div class="col-12">
                                        <label for="nameProduct" class="form-label">Nombre del Producto</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="nameProduct">
                                    </div>

                                    <div class="col-12">
                                        <label for="barCode" class="form-label">Codigo de Barras</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="barCode">
                                    </div>

                                    <div class="col-12">
                                        <label for="type_product_id" class="form-label">Tipo de Producto</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="type_product_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="section_id" class="form-label">Seccion</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="section_id">
                                    </div>

                                    <div class="col-12">
                                        <label for="unity_measurement_id" class="form-label">Unidad de Medida</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="unity_measurement_id">
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
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Codigo de Barras</th>
                        <th scope="col">Tipo de Producto</th>
                        <th scope="col">Seccion</th>
                        <th scope="col">Unidad de Medida</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $prod)
                    <tr>
                        <td>{{$prod->nameProduct}}</td>
                        <td>{{$prod->barCode}}</td>
                        <td>{{$prod->type_product_id}}</td>
                        <td>{{$prod->section_id}}</td>
                        <td>{{$prod->unity_measurement_id}}</td>
                        <td>
                            <a href="{{ url('/product/'.$prod->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $product->links() !!}
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection