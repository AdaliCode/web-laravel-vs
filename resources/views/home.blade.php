@extends('layout.main')
@section('title', 'Home')
@section('container')
    <h1 class="nerko-one-regular">Film</h1>
    <div class="row g-3">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-md-3">
                <img src="{{ asset('storage/film.jpg') }}" alt="" width="100%">
                <div class="text-center">Chastity High - 2024</div>
            </div>
        @endfor
    </div>
@endsection
