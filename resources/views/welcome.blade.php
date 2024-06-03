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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="row wow fadeInUp delay-04s">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="hotel-box">
                            <!-- Photo thumbnail -->
                            <div class="photo-thumbnail">
                                <div class="photo">
                                    <img src="img/room/img-1.jpg" alt="photo" class="img-fluid w-100">
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
                                    $567.99/Night
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="detail clearfix">
                                <h3>
                                    <a href="rooms-details.html">Luxury Room</a>
                                </h3>
                                <p class="location">
                                    <a href="rooms-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </p>
                                <div class="fecilities">
                                    <ul>
                                        <li>
                                            <i class="flaticon-bed"></i> Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-air-conditioning"></i>
                                            AC
                                        </li>
                                        <li>
                                            <i class="flaticon-graph-line-screen"></i>
                                            TV
                                        </li>
                                        <li>
                                            <i class="flaticon-weightlifting"></i>
                                            GYM
                                        </li>
                                        <li>
                                            <i class="flaticon-wifi-connection-signal-symbol"></i>
                                            Wi-fi
                                        </li>
                                        <li>
                                            <i class="flaticon-parking"></i>
                                            Parking
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel section end -->

    <!-- Our facilties section 2 start -->
    <div class="our-facilties-section-2">
        <div class="container">
            <div class="main-title">
                <h1>Our Facilities</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
            @if ($facilities->isEmpty())
                <p>No blog posts available.</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
            @if ($blogs->isEmpty())
                <p>No blog posts available.</p>
            @else
                <div class="slick row comon-slick-inner wow fadeInUp delay-04s"
                    data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

                    @foreach ($blogs as $blog)
                        <div class="item slide-box">
                            <div class="blog-1">
                                <div class="blog-image">
                                    @if ($blog->image_url)
                                        <div class="image-container">
                                            <img src="{{ url('storage', $blog->image_url) }}" alt="image"
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

<style>
    .image-container {
        position: relative;
        width: 100%;
        padding-top: 70%;
        /* 4:3 aspect ratio (can adjust as needed) */
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the image covers the container */
        object-position: center;
        /* Centers the image within the container */
    }
</style>
