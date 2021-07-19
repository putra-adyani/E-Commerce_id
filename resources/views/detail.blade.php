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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Open Cart
                            </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method</label>
                <select class="form-select" name="payment_method" aria-label="select">
                    <option selected value="Cash">Cash</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="COD">COD</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="payment_status" class="form-label">Payment Status</label>
                <input type="text" class="form-control" id="payment_status" name="payment_status">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
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