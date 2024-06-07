@extends('layouts.frontend.app')
@section('main')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Blog Post</h1>
            </div>
            <nav class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blog View</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Sub Banner end -->


    <!-- Blog body start -->
    <div class="blog-body content-area-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-1 blog-big mb-50">
                        <div class="blog-image">
                            @if ($blog->image_url)
                                <div class="image-container">
                                    <img src="{{ Storage::disk('blog_images')->url($blog->image_url) }}" alt="image"
                                        class="img-fluid w-100">
                                </div>
                            @endif
                            <div class="date-box">
                                <span>{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('M') }}
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">{{ $blog->author->name }}</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i
                                                class="fa fa-eye"></i></a>{{ $blog->view_count }}</li>
                                </ul>
                            </div>
                            <h3>
                                <a href="blog-details.html">{{ $blog->title }}</a>
                            </h3>
                            <p>{!! $blog->content !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Blog body end -->
@endsection
