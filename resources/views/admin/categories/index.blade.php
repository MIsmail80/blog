@extends('admin.layouts.master')

@section('content')

<div class="mt-4 d-flex justify-content-between align-items-center">
    <h1>Categories</h1>

    <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary">New Category</a>
</div>
<hr />
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @if ($categories->isEmpty())
        <tr>
            <td>
                No Data Found!
            </td>
        </tr>
        @endif

        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{url('admin/categories/'.$category->id.'/edit')}}">Edit</a>

                <form method="POST" action="{{url('admin/categories/'.$category->id)}}">
                    @method('DELETE')@csrf
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach        

    </tbody>
</table>

{{ $categories->links() }}

@endsection
