@extends('admin.layouts.master')

@section('content')

<div class="mt-4 d-flex justify-content-between align-items-center">
    <h1>Posts</h1>
</div>

<hr />
<form class="form-inline" method="get" action="{{url('admin/posts')}}">
    @csrf
    <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Categories</label>
        <select class="form-control" id="exampleFormControlSelect1" name="cats" value="{{old('cats')}}">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}"
                {{$category->id == request('cats') ? 'selected' : ''}}
                >{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Password</label>
        <select class="form-control" id="exampleFormControlSelect1" name="author" value="{{old('author')}}">
            <option value="">Select Author</option>
            @foreach ($authors as $author)
            <option value="{{$author->id}}"
                {{$author->id == request('author') ? 'selected' : ''}}
                >{{$author->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Featured?</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->author->name}}</td>
            <td>
                <input type="checkbox" value="{{$post->id}}" class="post"
                {{$post->featured ? 'checked' : ''}}>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
