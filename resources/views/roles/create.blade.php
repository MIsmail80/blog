@extends('layouts.master')

@section('content')

<form method="POST" action="{{url('roles')}}">
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
