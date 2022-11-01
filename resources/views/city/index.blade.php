@extends('layouts.general')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ciudades</h5>
            @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('message') }}
                </div>

            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear tipo usuario</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Crear Ciudad</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/city') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                    <div class="col-12">
                                        <label for="nameCity" class="form-label">Nombre de la Ciudad</label>
                                        <input type="text" class="form-control" id="inputNanme4" name="nameCity">
                                    </div>

                                    <div class="col-12">
                                        <select name="country_id" id="">
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->nameCountry}}</option>
                                            @endforeach
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
                        <th scope="col">ID</th>
                        <th scope="col">Ciudades</th>
                        <th scope="col">Paises</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nameC as $naC)
                    <tr>
                        <td>{{$naC->id}}</td>
                        <td>{{$naC->nameCity}}</td>
                        <td>{{$naC->country_id}}</td>
                        <td>
                            <a href="{{ url('/city/'.$naC->id.'/edit') }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $nameC->links() !!}
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection