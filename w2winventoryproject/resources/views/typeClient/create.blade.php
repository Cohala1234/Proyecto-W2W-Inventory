@extends('layouts.general')

@section('content')
<form action="{{ url('/typeClient') }}" method="POST">
@csrf
    <label for="typeClient">Tipo Cliente</label>
    <input type="text" name="typeClient">
    <input type="submit" value="Guardar">
</form>
@endsection