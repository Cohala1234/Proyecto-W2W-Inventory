@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/product/'.$namePEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="nameProduct" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameProduct" value="{{ $namePEdit->nameProduct }}">
                        </div>

                        <div class="col-8">
                            <label for="barCode" class="form-label">Codigo de Barras</label>
                            <input type="text" class="form-control" id="inputNanme4" name="barCode" value="{{ $namePEdit->barCode }}">
                        </div>

                        <div class="col-8">
                            <label for="type_product_id" class="form-label">Tipo de Producto</label>
                            <input type="text" class="form-control" id="inputNanme4" name="type_product_id" value="{{ $namePEdit->type_product_id }}">
                        </div>

                        <div class="col-8">
                            <label for="section_id" class="form-label">Seccion</label>
                            <input type="text" class="form-control" id="inputNanme4" name="section_id" value="{{ $namePEdit->section_id }}">
                        </div>

                        <div class="col-8">
                            <label for="unity_measurement_id" class="form-label">Unidad de Medida</label>
                            <input type="text" class="form-control" id="inputNanme4" name="unity_measurement_id" value="{{ $namePEdit->unity_measurement_id }}">
                        </div>

                        
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/product') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection