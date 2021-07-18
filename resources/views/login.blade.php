@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row mt-3">
        <div class="col-sm-4 offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="email" class="col-form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Sign in</button>
            </form>
        </div>
    </div>
</div>


@endsection 