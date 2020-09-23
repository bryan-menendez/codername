@extends('internals/layout')

@section('content')

<h1>CREANDO NUEVO DUMMY</h1>

<form action="{{ route('dummys/insert') }}" method="post">
    @csrf
    <input type="text" name="name" id="name"><br>
    <button type="submit">insertar</button>
</form>

@endsection