@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Home</h1>

        <h3>
            We currently have 
            @if ($total > 1)
                <span class="num">{{ $total }}</span> comics listed!
            @else
                <span class="num">{{ $total }}</span> comic listed!
            @endif
            <br>
            Browse the list through the navbar!
        </h3>
    </div>
@endsection