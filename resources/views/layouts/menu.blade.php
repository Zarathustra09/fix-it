<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <!-- Updated Address to a location in Manila, PH -->
                                <li>
                                    <span class="topbar-label"><i class="fa  fa-home"></i></span>
                                    <span class="topbar-hightlight">1234 Rizal Avenue, Manila, PH 1000</span>
                                </li>
                                <!-- Updated Email (optional) -->
                                <li>
                                    <span class="topbar-label"><i class="fa fa-envelope-o"></i></span>
                                    <span class="topbar-hightlight">
                                        <a href="mailto:info@yourdomain.ph">info@yourdomain.ph</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 right_section_header_top">
                    <div class="float-left">
                        <div class="social_icon">
                            <ul class="list-inline">
                                <!-- Social media links remain, but can be updated to local pages -->
                                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="make_appo">
                            <a class="btn white_btn" href="{{route('contact')}}">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="it_home.html"><img src="{{asset('fix-it-logo.png')}}" alt="logo" /></a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li>
                                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a class="{{ Request::is('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
                                </li>
                                @if(Auth::check())
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('guest.index')}}">Appointments</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="search_icon">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom end -->
</header>
