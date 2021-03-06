@extends('admin.layouts.master')

@section('content')

<div class="mt-4 d-flex justify-content-between align-items-center">
    <h1>Edit Category</h1>
</div>

<hr />

<form method="POST" action="{{url('admin/categories/'.$category->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Category Name</label>
        <input type="text" name="categoryName" class="form-control" value="{{$category->name}}">
        <small class="h6 text-danger">
            @if ($errors->has('categoryName'))
            {{$errors->get('categoryName')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
