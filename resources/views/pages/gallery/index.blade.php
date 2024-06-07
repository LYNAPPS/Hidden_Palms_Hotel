@extends('layouts.frontend.app')
@section('main')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Our Gallery</h1>
            </div>
            <nav class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Photo gallery secion start -->
    <div class="photo-gallery content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Gallery</h1>
                <p>Take a visual tour of our stunning facilities, beautiful rooms, and memorable events through our gallery.
                </p>
            </div>


            <div class="row filter-portfolio">
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                    <figure class="portofolio-thumb">
                        <a href="#"><img src="img/room/img-1.jpg" alt="image" class="img-fluid w-100"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Luxury Room</h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    <!-- Photo gallery end -->
@endsection
