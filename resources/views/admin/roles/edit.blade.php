@extends('admin.layouts.master')

@section('content')

<div class="mt-4 d-flex justify-content-between align-items-center">
    <h1>Edit Role</h1>
</div>

<hr />

<form method="POST" action="{{url('backend/roles/'.$role->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Role Name</label>
        <input type="text" name="roleName" class="form-control" value="{{$role->name}}">
        <small class="h6 text-danger">
            @if ($errors->has('roleName'))
            {{$errors->get('roleName')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
