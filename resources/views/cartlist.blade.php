@extends('master')
@section('content')
<div class="custom-search">
    <div class="container">
        <div class="col-lg-10">
            <div class="trending-wrapper">
                <h3>Cart List Product</h3>
                <a class="btn btn-success" href="ordernow">Order Now</a>
                @foreach ($products as $p)
                    <div class="row cart-list-devider">
                        <div class="col-lg-3">
                            <a href="detail/{{ $p->id }}">
                                <img src="{{ $p->gallery }}" class="trending-img" alt="{{ $p->name }}">
                            </a>
                            <p>Rp {{ $p->price }}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <h5>{{ $p->name }}</h5>
                                <p>{{ $p->description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <a href="/removecart/{{ $p->cart_id }}" class="btn btn-danger">Remove to Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>


@endsection