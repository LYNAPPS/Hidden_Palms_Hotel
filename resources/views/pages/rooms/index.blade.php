@extends('layouts.frontend.app')
@section('main')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Our Room Types</h1>
            </div>
            <nav class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                    <li class="breadcrumb-item active">Rooms</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Sub Banner end -->

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

@endsection
