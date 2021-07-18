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
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group m-1">
                            <form action="/add_to_cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                <button class="btn btn-primary">Add to Cart</button>
                            </form>
                        </li>
                        <li class="list-group m-1">
                            <button class="btn btn-warning">Buy Now</button>
                        </li>
                        <li class="list-group m-1">
                            <a href="/" class="btn btn-danger" role="button">back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection