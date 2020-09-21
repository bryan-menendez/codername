@extends('internals/layout')

@section('content')

<h1>Dummyz 4 u</h1>
<p>this is a list of, you know, dum dums</p>

<ol>
    @foreach ($dummys as $d)
        <li>{{ $d->id}} : {{ $d->name }}</li>
    @endforeach
</ol>


@endsection