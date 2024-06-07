@extends('layouts.frontend.app')
@section('main')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Contact Us</h1>
            </div>
            <nav class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Contact 1 start -->
    <div class="contact-1 content-area-6">
        <div class="container">
            <div class="main-title">
                <h1>Contact Us</h1>
                <p>We would love to hear from you! Reach out to us for any inquiries, feedback, or assistance you may need.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <!-- Contact form start -->
                    <div class="contact-form">
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floating-full-name"
                                            placeholder="Full Name">
                                        <label for="floating-full-name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="floating-email-address"
                                            placeholder="Email Address">
                                        <label for="floating-email-address">Email address</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floating-subject"
                                            placeholder="Subject">
                                        <label for="floating-subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floating-phone-Number"
                                            placeholder="Phone Number">
                                        <label for="floating-phone-Number">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-floating mb-4">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn text-center">
                                        <button type="submit" class="btn-md btn-theme btn-4 btn-7">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact form end -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <!-- Contact details start -->
                    <div class="contact-details">
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contant">
                                <h4>Address</h4>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contant">
                                <h4>Phone Number</h4>
                                @foreach ($contact->phones as $phone)
                                    <p>
                                        <a href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a><br>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contant">
                                <h4>Email Address</h4>
                                @foreach ($contact->emails as $email)
                                    <p>
                                        <a href="mailto:{{ $email->email }}">{{ $email->email }}</a>
                                    </p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- Contact details end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-1 end -->
@endsection
