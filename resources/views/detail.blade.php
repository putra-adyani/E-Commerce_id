@extends('master')
@section('content')

<div class="container">

    <div class="detail-wrapper">
        <div class="row mt-lg-5">
            <div class="col-lg-3 offset-lg-3">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="{{ $product['name'] }}">
            </div>
            <div class="col-lg-6 align-self-center">
                <br><br><br><br><br>
                <br><br><br><br>
                <h2>{{ $product['name'] }}</h2>
                <h3>Price : {{ $product['price'] }}</h3>
                <h4>Category : {{ $product['category'] }}</h4>
                <h5>Detail : {{ $product['description'] }}</h5>
                <div>
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-warning">Buy Now</button>
                    <a href="/" class="btn btn-danger" role="button">back</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection