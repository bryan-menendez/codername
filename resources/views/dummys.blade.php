@extends('internals/layout')

@section('content')

<h1>Dummyz 4 u</h1>
<p>this is a list of, you know, dum dums</p>

@if (session('msg'))
    <p>{{ session('msg') }}</p>
@endif


<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>actions</th>
    </thead>

    @foreach ($dummys as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td><a href="{{ route('dummys/detail', $d) }}">{{ $d->name }}</a></td>
        <td>
            <a href="{{ route('dummys/editView', $d) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('dummys/delete', $d)}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $dummys->links() }}

<br>
<a href="{{ route('dummys/insertView') }}" class="btn btn-primary btn-sm">Agregar nuevo</a>


@endsection