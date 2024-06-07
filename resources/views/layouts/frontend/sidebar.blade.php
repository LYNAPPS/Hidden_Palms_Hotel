<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar sidebar-heading-section">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="img/logos/logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <ul class="menu-list">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.page') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.page') }}">
                        About Us
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rooms.page') }}">
                        Rooms
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery.page') }}">
                        Gallery

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.page') }}">
                        Events & Conferences
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.page') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="sidebar-contact-info">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="body-info">
                    @foreach ($contact->phones as $phone)
                        <a href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a>
                    @endforeach
                </div>
            </div>
            <div class="sidebar-contact-info">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="body-info">
                    @foreach ($contact->emails as $email)
                        <a href="mailto:{{ $email->email }}">{{ $email->email }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</nav>
<!-- Sidenav end -->
