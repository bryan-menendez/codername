@extends('internals/layout')

@section('content')

<h1>EDITANDO DUMMY</h1>

@if (session('msg'))
    <p>{{ session('msg') }}</p>
@endif

<form action="{{ route('dummys/edit', $dummy) }}" method="post">
    @csrf
    @method('PUT')
    
    @error('name')
        <p>falta nomvr3</p>
    @enderror

    <p>id : {{ $dummy->id }}</p>
    <p>nombre: </p><input type="text" name="name" id="name" value="{{ $dummy->name }}"><br>
    <button type="submit" class="btn btn-primary">editar</button>
</form>


@endsection