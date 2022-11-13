@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/sectionProduct/'.$sectProdEdit->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="col-8">
                            <label for="product_id" class="form-label">Producto</label>
                            <input type="text" class="form-control" id="inputNanme4" name="product_id" value="{{ $sectProdEdit->product_id }}">
                        </div>

                        <div class="col-8">
                                <label for="product_id" class="form-label">Seccion</label>
                                <input type="text" class="form-control" id="inputNanme4" name="section_id" value="{{ $sectProdEdit->section_id }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/sectionProduct') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection