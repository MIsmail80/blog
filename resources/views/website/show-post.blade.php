@extends('layouts.master')

@section('banner')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Blog Post Details</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="single-blog.html">Post Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    This is single post page
@endsection
