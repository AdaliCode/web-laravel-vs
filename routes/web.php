<?php

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $movies = Movie::all();
    return view('home', compact('movies'));
});

Route::get('/movie/{slug}', function ($movieSlug) {
    $detailMovie = Movie::query()->where('slug', $movieSlug)->first();
    return view('movie/index', ['detailMovie' => $detailMovie]);
});

Route::get('/genre/{id}', function ($id) {
    $genre = Genre::find($id);
    return view('movie/genre', compact('genre'));
});
