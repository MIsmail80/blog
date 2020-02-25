@extends('website.layouts.master')

@section('content')
<form method="POST" action="{{url('posts')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        <small class="h6 text-danger">
            @if ($errors->has('title'))
            {{$errors->get('title')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Content</label>
        <textarea class="form-control" id="exampleInputEmail1" name="content" rows="10"></textarea>
        <small class="h6 text-danger">
            @if ($errors->has('content'))
            {{$errors->get('content')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Categories</label>
        <select class="form-control" id="exampleFormControlSelect1" name="cats[]" multiple>            
            @foreach ($cats as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <small class="h6 text-danger">
            @if ($errors->has('cats'))
            {{$errors->get('cats')[0]}}
            @endif
        </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Photo</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo"
            accept="image/jpeg,image/png">
        <small class="h6 text-danger">
            @if ($errors->has('photo'))
            {{$errors->get('photo')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection

@section('sidebar')
@include('website.nav.user-sidebar')
@endsection
