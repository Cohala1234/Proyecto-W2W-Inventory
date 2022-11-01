@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/departament/'.$depaEdit->id) }}" method="POST">
                <div class="modal-body">
                  <!-- linea de seguridad -->
                    @csrf
                 <!-- metodo editar -->   {{ method_field('PUT') }}
                        <div class="col-8" >
                              <h1 id="edit_tittle">Actualizar Departamento</h1>
                            <label for="nameDepartament" class="form-label">Departamento</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nameDepartament" value="{{ $depaEdit->nameDepartament }}">
                        </div>

                        <div class="col-8" >
                          <label for="city_id" class="form-label">Ciudad</label>
                          <input type="text" class="form-control" id="inputNanme4" name="city_id" value="{{ $depaEdit->city_id }}">
                        </div>

                      <div class="col-8" >
                      <label for="country_id" class="form-label">Pais</label>
                      <input type="text" class="form-control" id="inputNanme4" name="country_id" value="{{ $depaEdit->country_id }}">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/departament') }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@endsection