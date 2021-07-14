@extends('layout.app')

@section('content')

    @foreach ($comics as $comic)
        <h3>{{ $comic->name }}</h3>
    @endforeach

@endsection