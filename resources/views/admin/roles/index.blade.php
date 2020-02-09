@extends('admin.layouts.master')

@section('content')

<div class="mt-4 d-flex justify-content-between align-items-center">
    <h1>Roles</h1>

    <a href="{{route('roles.create')}}" class="btn btn-sm btn-primary">New Role</a>
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

        @foreach ($roles as $role)
        <tr>
            <th scope="row">{{$role->id}}</th>
            <td>{{$role->name}}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{url('backend/roles/'.$role->id.'/edit')}}">Edit</a>

                <form method="POST" action="{{url('backend/roles/'.$role->id)}}">
                    @method('DELETE')@csrf
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
