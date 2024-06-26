@extends('layouts.frontend.app')
@section('main')
    <!-- Banner start -->
    <div class="banner" id="banner-2">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item active">
                    <img class="d-block w-100 h-100"
                        src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/468532219.jpg?k=17f7787d0280f6d3042fd96bee01f5ee8d125104803e3bc2f9c7ca9d38c01977&o=&hp=1"
                        alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="carousel-content container align-self-center">
                            <div class="row bti-section">
                                <div class="col-lg-7 col-md-12 align-self-center">
                                    <div class="banner-test-info wow fadeInLeft delay-04s">
                                        <h2>Welcome To {{ env('APP_NAME') }}.</h2>
                                        <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit
                                            amet, conconsectetuer</p>
                                        <a class="btn-lg btn-4 btn-6" href="#">Get Started Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 wow fadeInRight delay-04s">
                                    <div class="search-area-box-2">
                                        <div class="search-contents">
                                            <form method="GET">
                                                <h4>Search Your <span>Rooms</span></h4>
                                                <div class="form-group">
                                                    <input type="text" class="btn-default datepicker"
                                                        placeholder="Check In">
                                                </div>
                                                <div class="form-group clearfix">
                                                    <input type="text" class="btn-default datepicker"
                                                        placeholder="Check Out">
                                                </div>
                                                <div class="form-group clearfix">
                                                    <select class="selectpicker search-fields" name="room">
                                                        <option>Room</option>
                                                        <option>Single Room</option>
                                                        <option>Double Room</option>
                                                        <option>Deluxe Room</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="adults">
                                                        <option>Adult</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="children">
                                                        <option>Child</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button class="w-100 btn-theme btn-4 btn-7">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner end -->

    <!-- About hotel alpha start -->
    <div class="about-hotel-alpha content-area-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 wow fadeInLeft delay-04s">
                    <div class="about-text clearfix">
                        <!-- title -->
                        <h5>Hotel <span>About</span></h5>
                        <h1>Welcome To <span style="color: #2adc71;">{{ $contact->name }}</span></h1>
                        <!-- paragraph -->
                        <p>{!! \Illuminate\Support\Str::limit($siteInfo->about_us, 700) !!}</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInRight delay-04s align-self-center">
                    <div class="about-content-section">

                        <ul class="network-list mb-40">
                            <li>
                                <i class="icon fa fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>{{ $siteInfo->mission_statement }}</p>

                            </li>

                            <li>
                                <i class="icon fa fa-binoculars"></i>
                                <h4>Vision</h4>
                                <p>{{ $siteInfo->vision }}</p>
                            </li>

                        </ul>
                        <a class="btn-lg btn-5" href="{{ route('about.page') }}"><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About hotel alpha start -->

    <!-- Hotel section start -->
    <div class="content-area hotel-section bg-grey">
        <div class="overlay">
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Best Rooms</h1>
                    <p>Explore our luxurious rooms, each designed with comfort and style in mind. Experience the best we
                        have to offer.</p>
                </div>

                @if ($rooms->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        Currently, there are no rooms available. Please check back later.
                    </div>
                @else
                    <div class="row wow fadeInUp delay-04s">
                        @foreach ($rooms as $index => $room)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="hotel-box">
                                    <!-- Photo thumbnail -->
                                    <div class="photo-thumbnail">
                                        <div class="photo">
                                            <div class="image-container">
                                                <img src="{{ Storage::disk('room_images')->url($room->main_image) }}"
                                                    alt="image" class="img-fluid w-100">
                                            </div>
                                            <a href="rooms-details.html">
                                                <span class="blog-one__plus"></span>
                                            </a>
                                        </div>
                                        <div class="pr">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-full"></i>
                                            </div>
                                            GHC {{ $room->price }}/Night
                                        </div>
                                    </div>
                                    <!-- Detail -->
                                    <div class="detail clearfix">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">
                                                <a href="rooms-details.html">{{ $room->name }}</a>
                                            </h3>
                                            <p class="mb-0" style="color: #2adc71;">
                                                GHC {{ $room->price }}/Night
                                            </p>
                                        </div>

                                        {{-- <p class="location">
                                            {!! \Illuminate\Support\Str::limit($room->description, 60, $end = '...') !!}
                                        </p> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Hotel section end -->

    <!-- Our facilties section 2 start -->
    <div class="our-facilties-section-2">
        <div class="container">
            <div class="main-title">
                <h1>Our Facilities</h1>
                <p>Discover the range of facilities we offer, designed to provide you with comfort and convenience during
                    your stay.</p>
            </div>

            @if ($facilities->isEmpty())
                <div class="alert alert-warning" role="alert">
                    No blog posts available.</div>
            @else
                <div class="row">
                    @foreach ($facilities as $index => $facilty)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services-box">
                                <div class="number">{{ $index + 1 }}</div>
                                <div class="detail" style="width: 100%; margin-left: 0;">
                                    <h3>
                                        <a href="#">{{ $facilty->name }}</a>
                                    </h3>
                                    <p>
                                        {!! \Illuminate\Support\Str::limit($facilty->description, 100, $end = '...') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
    <!-- Our facilties section 2 end -->



    <!-- Blog section start -->
    <div class="blog-section content-area comon-slick bg-white">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Blog</h1>
                <p>Stay updated with the latest news, tips, and stories from our team. Explore our blog for valuable
                    insights and inspiration.</p>
            </div>

            @if ($blogs->isEmpty())
                <div class="alert alert-warning" role="alert">
                    No blog posts available.
                </div>
            @else
                <div class="slick row comon-slick-inner wow fadeInUp delay-04s"
                    data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

                    @foreach ($blogs as $blog)
                        <div class="item slide-box">
                            <div class="blog-1">
                                <div class="blog-image">
                                    @if ($blog->image_url)
                                        <div class="image-container">
                                            <img src="{{ Storage::disk('blog_images')->url($blog->image_url) }}"
                                                alt="image" class="img-fluid w-100">
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
                                        <a href="{{ route('read_blog', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <p>
                                        {!! \Illuminate\Support\Str::limit($blog->content, 150, $end = '...') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            @endif
        </div>
    </div>
    <!-- Blog section end -->
@endsection
