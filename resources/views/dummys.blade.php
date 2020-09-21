@extends('internals/layout')

@section('content')

<h1>Dummyz 4 u</h1>
<p>this is a list of, you know, dum dums</p>

<ol>
    @foreach ($dummys as $d)
<li><a href="{{ route('dummys/detail', $d) }}">{{ $d->id}} : {{ $d->name }}</a></li>
    @endforeach
</ol>


@endsection