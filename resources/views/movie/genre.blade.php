@extends('layout.main')
@section('title', 'Genre ' . $genre->name)
@section('container')
    <h1 class="nerko-one-regular">
        {{ $genre->name }}
    </h1>
    <div class="row g-3">
        @foreach ($genre->movies as $movie)
            <div class="col-md-3">
                <a href="/movie/{{ $movie->slug }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('storage/film.jpg') }}" alt="" width="100%">
                    {{ $movie->title }}<br>
                    {{ \Carbon\Carbon::parse($movie->release)->format('Y') }}
                </a>
            </div>
        @endforeach
    </div>
@endsection
