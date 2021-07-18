@extends('master')
@section('content')
<div class="custom-login">

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($products as $p)
                <div class="carousel-item {{ $p['id']==1?'active':'' }}" data-bs-interval="10000">
                    <img src="{{ $p['gallery'] }}" class="slider-img" alt="{{ $p['name'] }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $p['name'] }}</h5>
                        <p>{{ $p['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="trending-wrapper">
            <h3>Trending Product</h3>
            <div class="carousel-inner">
                @foreach ($products as $p)
                    <div class="trending-item" data-bs-interval="10000">
                        <img src="{{ $p['gallery'] }}" class="trending-img" alt="{{ $p['name'] }}">
                        <div class="">
                            <p>{{ $p['name'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>


@endsection 