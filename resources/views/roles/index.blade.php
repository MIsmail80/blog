@extends('layouts.master')

@section('content')
    <ul>
        @foreach ($roles as $role)
            <li>{{$role->name}}</li>
        @endforeach
    </ul>
@endsection