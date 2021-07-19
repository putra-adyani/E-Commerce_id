    @extends('master')
    @section('content')
    <div class="custom-search">
        <div class="container">
            <div class="col-lg-10">
                <div class="trending-wrapper">
                    <h3>My orders</h3>
                    
                    @foreach ($orders as $p)
                        <div class="row cart-list-devider">
                            <div class="col-lg-3">
                                <a href="detail/{{ $p->id }}">
                                    <img src="{{ $p->gallery }}" class="trending-img" alt="{{ $p->name }}">
                                </a>
                                <p>Rp {{ $p->price }}</p>
                            
                            <div class="col-lg-4">
                                <div class="">
                                    <h5>Name : {{ $p->name }}</h5>
                                    <p>Delivery Status : {{ $p->status}}</p>
                                    <p>Address : {{ $p->address}}</p>
                                    <p>Payment Status : {{ $p->payment_status}}</p>
                                    <p>Payment Method : {{ $p->payment_method }}</p>    
                                </div>
                            </div>
                    
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>  


    @endsection