@extends('layout.main')
@section('title', $detailMovie->title)
@section('container')
    <h1 class="nerko-one-regular">
        {{ $detailMovie->title }} - {{ \Carbon\Carbon::parse($detailMovie->release)->format('Y') }}
    </h1>
    <p>12. Jun, 2024 - South Korea - 93 Min</p>
    <p>Action | Thriller</p>
    <p>Yuna is a famous YouTube influencer but always looks down on others. She is invited to a cosmetic brand launching
        party but things don’t go the way she had wanted. Tired and extremely stressed, she takes couple of shots and falls
        asleep after calling a designated driver. When Yuna opens her eyes, she realizes she’s trapped in the trunk of her
        car. The kidnapper asks her for ransom, not just cash but to broadcast a ‘kidnapping live-stream’ and beg for money
        from the viewers. But everyone thinks she’s playing out a self-fabricated scenario…
    </p>
    <div class="row">
        <iframe width="420" height="500" src="https://www.youtube.com/embed/UlD_4MrabSQ?autoplay">
        </iframe>
    </div>
@endsection
