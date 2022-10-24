@extends('layouts.general')

@section('content')
<form action="{{ url('/typeUser') }}" method="POST">
@csrf
    <label for="typeUser">Tipo Usuario</label>
    <input type="text" name="typeUser">
    <input type="submit" value="Guardar">
</form>
@endsection