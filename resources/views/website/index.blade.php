@extends('website.layouts.master')

@section('banner')
<section class="post_slider_area">
    <div class="post_slider_inner owl-carousel">
        <div class="item">
            <div class="post_s_item">
                <div class="post_img">
                    <img src="img/post-slider/post-s-1.jpg" alt="">
                </div>
                <div class="post_text">
                    <a class="cat" href="#">Gadgets</a>
                    <a href="single-blog.html">
                        <h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                    <div class="date">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="post_s_item">
                <div class="post_img">
                    <img src="img/post-slider/post-s-2.jpg" alt="">
                </div>
                <div class="post_text">
                    <a class="cat" href="#">Gadgets</a>
                    <a href="single-blog.html">
                        <h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                    <div class="date">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="post_s_item">
                <div class="post_img">
                    <img src="img/post-slider/post-s-3.jpg" alt="">
                </div>
                <div class="post_text">
                    <a class="cat" href="#">Gadgets</a>
                    <a href="single-blog.html">
                        <h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                    <div class="date">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="post_s_item">
                <div class="post_img">
                    <img src="img/post-slider/post-s-4.jpg" alt="">
                </div>
                <div class="post_text">
                    <a class="cat" href="#">Gadgets</a>
                    <a href="single-blog.html">
                        <h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                    <div class="date">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
                    </div>
                </div>
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
@endsection

@section('sidebar')
@include('website.nav.main-sidebar')
@endsection
