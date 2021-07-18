@extends('master')
@section('content')
<div class="custom-search">
    <div class="col-lg-10>
        <div class="trending-wrapper">
            <div class="container">
                <h3>Cart List Product</h3>
                @foreach ($products as $p)
                    <div class="row cart-list-devider">
                        <div class="col-lg-3">
                            <a href="detail/{{ $p->id }}">
                                <img src="{{ $p->gallery }}" class="trending-img" alt="{{ $p->name }}">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <h5>{{ $p->name }}</h5>
                                <p>{{ $p->description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-danger">Remove to Cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>


@endsection