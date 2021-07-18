@extends('master')
@section('content')
<div class="custom-search">
    <div class="container mt-4">
        <div class="trending-wrapper">
            <h3>Result for Product</h3>
            <div class="carousel-inner">
                @foreach ($products as $p)
                    <div class="searched-item" data-bs-interval="10000">
                        <a href="detail/{{ $p['id'] }}">
                            <img src="{{ $p['gallery'] }}" class="trending-img" alt="{{ $p['name'] }}">
                        </a>
                        <div class="">
                            <h5>{{ $p['name'] }}</h5>
                            <p>{{ $p['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>


@endsection 