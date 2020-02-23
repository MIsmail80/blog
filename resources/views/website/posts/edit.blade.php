@extends('website.layouts.master')

@section('content')
<form method="POST" action="{{url('posts/'.$post->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"
            value="{{$post->title}}">
        <small class="h6 text-danger">
            @if ($errors->has('title'))
            {{$errors->get('title')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Content</label>
        <textarea class="form-control" id="exampleInputEmail1" name="content" rows="10">{{$post->content}}</textarea>
        <small class="h6 text-danger">
            @if ($errors->has('content'))
            {{$errors->get('content')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Photo</label>
        <img src="{{asset($post->image)}}" class="img-thumbnail">
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo"
            accept="image/jpeg,image/png">
        <small class="h6 text-danger">
            @if ($errors->has('photo'))
            {{$errors->get('photo')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

@section('sidebar')
@include('website.nav.user-sidebar')
@endsection
