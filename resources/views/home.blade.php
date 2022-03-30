@extends('layouts.basic')
@section('pageTitle', 'Home')
@section('content')
    <h1>Film</h1>
    @foreach ($movies as $movie)
    <div class="movie">
        <h3>{{ $movie->title }}</h3>
        <ul>
            <li> <span>Titolo: </span> {{ $movie->original_title }}</li>
            <li><span>Nazionalità: </span> {{ $movie->original_title }}</li>
            <li><span>Data di uscita: </span> {{ $movie->original_title }}</li>
            <li><span>Voto: </span> {{ $movie->original_title }}</li>
        </ul>
    </div>
    @endforeach

@endsection