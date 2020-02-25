@extends('website.layouts.master')

@section('banner')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>{{$category->name}}</h2>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
@foreach ($posts as $post)
<article class="blog_style1">
    <div class="blog_img">
        <img class="img-fluid" src="{{asset($post->image)}}" alt="">
    </div>
    <div class="blog_text">
        <div class="blog_text_inner">

            @foreach ($post->categories as $cat)
            <a class="cat" href="">{{$cat->name}}</a>
            @endforeach

            <a href="single-blog.html">
                <h4>{{$post->title}}</h4>
            </a>
            <p>{{Str::words($post->content, 30)}}</p>
            <div class="date">
                <a href="#">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    {{Carbon\Carbon::parse($post->created_at)->format('d / m / Y')}}
                </a>
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
            </div>
        </div>
    </div>
</article>
@endforeach

{{$posts->links()}}

@endsection

@section('sidebar')
@include('website.nav.main-sidebar')
@endsection
