@extends('admin.layouts.master')

@section('content')

<div class="mt-4 d-flex justify-content-between align-items-center">
    <h1>New Role</h1>
</div>

<hr />

<form method="POST" action="{{url('backend/roles')}}">
    @csrf
    <div class="form-group">
        <label>Role Name</label>
        <input type="text" name="roleName" class="form-control" value="{{old('roleName')}}">
        <small class="h6 text-danger">
            @if ($errors->has('roleName'))
            {{$errors->get('roleName')[0]}}
            @endif
        </small>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
