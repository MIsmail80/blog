@extends('website.layouts.master')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Title</th>
                <th scope="col">Categories</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td class="w-25"><img src="{{asset($post->image)}}" class="img-thumbnail"></td>
                <td class="w-50">{{$post->title}}</td>                
                <td>
                    <ul>
                        @foreach ($post->categories as $cat)
                            <li>{{$cat->name}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{url('/posts/'.$post->id.'/edit')}}">
                        Edit</a>

                    <form method="POST" action="{{url('/posts/'.$post->id)}}">
                        @method('DELETE')@csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection

@section('sidebar')
@include('website.nav.user-sidebar')
@endsection
