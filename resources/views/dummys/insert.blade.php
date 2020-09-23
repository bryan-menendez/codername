@extends('internals/layout')

@section('content')

<h1>CREANDO NUEVO DUMMY</h1>

<form action="{{ route('dummys/insert') }}" method="post">
    @csrf

    @error('name')
        <p>falta nomvr3</p>
    @enderror

    <input type="text" name="name" id="name" value="{{ old('name') }}"><br>
    <button type="submit" class="btn btn-primary">insertar</button>
</form>

@endsection