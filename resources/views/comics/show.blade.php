@extends('layout.app')

@section('content')
    <div class="container">
        <div class="comic">
            <div class="card">
                <img src="{{ $comic->poster }}" alt="">
            </div>
            <div class="info">
                <h3>{{$comic->name }}</h3>
                <span>
                    <b>Serie: </b>{{ $comic->serie}}
                </span>
                <span>
                    <b>Category: </b>{{ $comic->category}}
                </span>
                <span>
                    <b>Release date: </b>{{ $comic->realease_date}}
                </span>
                <span>
                    <b>ISBN: </b>{{ $comic->isbn}}
                </span>
                <div class="buy">
                    <span>
                        <b>Price: $</b>{{ $comic->price}}
                    </span>
                    <span>
                        <a href="#" class="btn btn-secondary">Buy now</a>
                    </span>
                </div>
                <div class="delete">
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" title="Delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection