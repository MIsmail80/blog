@extends('website.layouts.master')

@section('content')
{{-- <ul class="list-unstyled"> --}}

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            {{-- <li class="media">
        <img src="{{asset($post->image)}}" class="mr-3" alt="{{$post->title}}">
            <div class="media-body">
                <h5 class="mt-0 mb-1">{{$post->title}}</h5>
                {{Str::words($post->content, 10)}}
            </div>
            </li> --}}

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td class="w-25"><img src="{{asset($post->image)}}" class="img-thumbnail"></td>
                <td class="w-50">{{$post->title}}</td>
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

{{-- </ul> --}}
@endsection

@section('sidebar')
@include('website.nav.user-sidebar')
@endsection
