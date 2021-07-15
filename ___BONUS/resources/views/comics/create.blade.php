@extends('layout.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name"><strong>Name</strong></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter the name" required>
            </div>
            <div class="form-group">
                <label for="serie"><strong>Series</strong></label>
                <input type="text" name="serie" class="form-control" id="serie" placeholder="Enter the series" required>
            </div>
            <div class="form-group">
                <label for="category"><strong>Category</strong></label>
                <input type="text" name="category" class="form-control" id="category" placeholder="Enter the category">
            </div>
            <div class="form-group">
                <label for="price"><strong>Price</strong></label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter the price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="release_date"><strong>Release date</strong></label>
                <input type="date" name="release_date" class="form-control" id="release_date" placeholder="Enter the release date">
            </div>
            <div class="form-group">
                <label for="isbn"><strong>ISBN</strong></label>
                <input type="number" name="isbn" class="form-control" id="isbn" placeholder="Enter the isbn" required>
            </div>
            <div class="form-group">
                <label for="poster"><strong>Poster url</strong></label>
                <input type="text" name="poster" class="form-control" id="poster" placeholder="Enter the poster url" required>
            </div>
            <button type="submit" class="btn btn-primary">Add new comic</button>
        </form>
    </div>
@endsection