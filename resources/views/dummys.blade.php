@extends('internals/layout')

@section('content')

<h1>Dummyz 4 u</h1>
<p>this is a list of, you know, dum dums</p>

@if (session('msg'))
    <p>{{ session('msg') }}</p>
@endif


<ol>
    @foreach ($dummys as $d)
        <li><a href="{{ route('dummys/detail', $d) }}">{{ $d->id}} : {{ $d->name }}</a></li>
    @endforeach
</ol>

<br>
<a href="{{ route('dummys/insertView') }}">Agregar nuevo</a>


@endsection