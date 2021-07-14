@extends('layout.app')

@section('content')
    <div class="container">
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="card">
                <h4>{{ $comic->name }}</h4>
                <div>
                    <img src="{{ $comic->poster }}" alt="">
                    <a name="comic" id="comic" class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}" role="button">View</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="add">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add a comic</a>
        </div>
    </div>
@endsection