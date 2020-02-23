@extends('website.layouts.master')

@section('banner')

@endsection

@section('content')
<form method="POST" action="{{url('save-profile')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"
            value="{{$user->name}}">
        <small class="h6 text-danger">
            @if ($errors->has('email'))
            {{$errors->get('email')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
            value="{{$user->email}}">
        <small class="h6 text-danger">
            @if ($errors->has('email'))
            {{$errors->get('email')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Gender</label>
        <div class="px-5">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1"
                    {{$user->gender == 1 ? 'checked' : ''}}>
                <label class="form-check-label" for="gridRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="2"
                    {{$user->gender == 2 ? 'checked' : ''}}>
                <label class="form-check-label" for="gridRadios2">
                    Female
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date Of Birth</label>
        <input class="form-control flatpicker" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="birth_at" value="{{$user->birth_at}}">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Avatar</label>
        <img src="{{asset($user->image)}}" class="img-thumbnail">
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo" accept="image/jpeg,image/png">
        <small class="h6 text-danger">
            @if ($errors->has('photo'))
            {{$errors->get('photo')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>
@endsection

@section('sidebar')
    @include('website.nav.user-sidebar')
@endsection