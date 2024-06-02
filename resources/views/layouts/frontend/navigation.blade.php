<!-- Main header start -->
<header class="main-header" id="main-header-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="{{ route('home.page') }}">
                <img src="img/logos/logo.png" alt="logo" class="logo-photo">
                <img src="img/logos/white-logo.png" alt="logo" class="logo-photo2">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
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
        </nav>
    </div>
</header>
<!-- Main header end -->
