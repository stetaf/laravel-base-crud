@extends('layout.app')

@section('content')
    <div class="container">
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="card">
                <h4>{{ $comic->name }}</h4>
                <img src="{{ $comic->poster }}" alt="">
                <a name="comic" id="comic" class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}" role="button">View</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection