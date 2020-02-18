@extends('website.layouts.master')

@section('banner')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Register New User</h2>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<form method="POST" action="{{url('register')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Gender</label>
        <div class="px-5">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="2">
                <label class="form-check-label" for="gridRadios2">
                    Female
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date Of Birth</label>
        <input type="email" class="form-control flatpicker" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="birth_at">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Avatar</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo" accept="image/jpeg,image/png">
        <small class="h6 text-danger">
            @if ($errors->has('photo'))
            {{$errors->get('photo')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
