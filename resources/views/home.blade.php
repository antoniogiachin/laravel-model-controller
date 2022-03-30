@extends('layouts.basic')
@section('pageTitle', 'Home')
@section('content')

    <div class="container">
        {{-- Stampo l'array in film per ognuno creo un div con una lista degli attributi --}}
        @foreach ($movies as $movie)
        <div class="movie">
            <a href="#">
                <h3>{{ $movie->title }}</h3>
                <ul>
                    <li> <span>Titolo Originale: </span> {{ $movie->original_title }}</li>
                    <li><span>Nazionalità: </span> {{ $movie->nationality }}</li>
                    <li><span>Data di uscita: </span> {{ $movie->date }}</li>
                    <li><span>Voto: </span> {{ $movie->vote }}</li>
                </ul>
            </a>
        </div>
        @endforeach
    </div>


@endsection