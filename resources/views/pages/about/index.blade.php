@extends('layouts.frontend.app')
@section('main')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>About Us</h1>
            </div>
            <nav class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- About hotel alpha start -->
    <div class="about-hotel-alpha content-area-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img-section">
                        <div class="image-box">
                            <div class="image-1"><img src="{{ url('asset/img/about/img-4.jpg') }}" class="rounded"
                                    alt="photo"></div>
                        </div>
                        <div class="about-box-Experience">
                            <h3 class="text-white">38</h3>
                            <p class="mb-0 text-white">Years of Experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="about-content-section">
                        <h5>Hotel <span>Bayview</span></h5>
                        <h1>Welcome To Hotel Alpha</h1>
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
                        {{-- <a class="btn-lg btn-5" href="{{ route('about.page') }}"><span>Read More</span></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About hotel alpha start -->

    <!-- Our facilties section 2 start -->
    <div class="our-facilties-section-2 bg-white">
        <div class="container">
            <div class="main-title">
                <h1>Our Facilities</h1>
                <p>Discover the range of facilities we offer, designed to provide you with comfort and convenience during
                    your stay.</p>
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
@endsection
