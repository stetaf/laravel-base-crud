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
                    <b>Release date: </b>{{ $comic->release_date}}
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
                <hr>
                <small style="display:block">Admin stuff</small>
                <div class="edit">
                    <form action="{{ route('comics.edit', $comic->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-secondary" title="Edit">Edit</button>
                    </form>
                </div>
                <div class="delete">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del">Delete</button>
                    <!-- 
                        Use bootstrap to ask delete confirmation.
                        Alternatively, we could use onclick attribute on the button with a confirm popup:
                        <button class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure ?');">Delete</button>
                     -->
                    <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete {{ $comic->name }} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection