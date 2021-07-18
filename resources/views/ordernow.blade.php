@extends('master')
@section('content')
<div class="custom-search">
    <div class="col-lg-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>Rp. {{ $total }},-</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rp. 0,-</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>Rp. 10000,-</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>Rp. {{ $total + 10000 }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" id="address" placeholder="enter your address" class=""></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label>
                    <input type="radio" value="cash" name="payment"><span>online payment</span>
                    <input type="radio" value="cash" name="payment"><span>EMI payment</span>
                    <input type="radio" value="cash" name="payment"><span>payment on delivery</span>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>

</div>


@endsection