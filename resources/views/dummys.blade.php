@extends('internals/layout')

@section('content')

    <h1>Dummyz 4 u</h1>
    <p>this is a list of, you know, dum dums</p>

    @if (session('msg'))
        <p>{{ session('msg') }}</p>
    @endif

    <p>Please click on the checkbox control.</p>

    <form action="{{ route('dummys/insert')}}">
        @csrf
        @method('POST')
        <label for="id-checkbox">Checkbox:</label>
        <input type="checkbox" id="id-checkbox" />
        <input type="text" name="name" id="boxName">
        <button type="submit" class="btn btn-danger btn-sm">submitear</button>
    </form>

    <div id="output-box"></div>

    <table class="table">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </thead>

        @foreach ($dummys as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td><a href="{{ route('dummys/detail', $d) }}">{{ $d->name }}</a></td>
                <td>
                    <a href="{{ route('dummys/editView', $d) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('dummys/delete', $d) }}" method="post" class="d-inline">
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
