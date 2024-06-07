<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Contact Us</h1>
                        </div>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Address: {{ $contact->address }}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:
                                @foreach ($contact->emails as $email)
                                    <a href="mailto:{{ $email->email }}">{{ $email->email }}</a>
                                @endforeach
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone: <br>
                                @foreach ($contact->phones as $phone)
                                    <a href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a><br>
                                @endforeach
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Booking</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="{{ route('rooms.page') }}">Rooms & Suites</a>
                            </li>

                            <li>
                                <a href="#">Our Facilties</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>About</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="{{ route('about.page') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('events.page') }}">Blog & Events</a>
                            </li>

                            <li>
                                <a href="{{ route('gallery.page') }}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('contact.page') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-item newsletter">
                        <div class="main-title-2">
                            <h1>Newsletter</h1>
                        </div>
                        <div class="newsletter-inner">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                            <form class="form-inline" action="#" method="GET">
                                <input type="text" class="form-control" id="inlineFormInputName4"
                                    placeholder="Your Email">
                                <button type="submit" class="btn btn-small"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p> &copy; @php echo date('Y') @endphp Hidden Palms Hotel
                        All Rights
                        Reserved. Developed By: <a href="http://techmaxsolutionsgh.com/" target="_blank">BitByte
                            Tech
                            Solutions</a></p>
                </div>
                {{-- <div class="col-lg-6 col-md-6">
                    <div class="clearfix"></div>
                    <ul class="social-list">
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
