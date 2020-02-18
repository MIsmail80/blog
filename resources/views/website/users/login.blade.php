@extends('website.layouts.master')

@section('banner')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Login</h2>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<form method="POST" action="{{url('login')}}">
    @csrf
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <small class="h6 text-danger">
            @if ($errors->has('email'))
            {{$errors->get('email')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <small class="h6 text-danger">
            @if ($errors->has('password'))
            {{$errors->get('password')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
