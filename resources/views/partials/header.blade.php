<header class="header-style-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-style-one-wrapper">
                        <div class="logo-area">
                            <a href="{{ url('/')}}" class="logo">
                                <img class="light" src="{{ asset('assets/images/logo/axione-solutions-logo.png')}}" alt="logo">
                                <img class="dark" src="{{ asset('assets/images/logo/axione-solutions-logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <nav class="main-nav-area">
                            <ul class="list-unstyled fluxi-desktop-menu">

                                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="{{ url('/')}}">Home</a></li>
                                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="{{ url('about-us')}}">About Us</a></li>

                                
                                <li class="menu-item fluxi-has-dropdown">
                                    <a href="#" class="fluxi-dropdown-main-element">Services</a>
                                    <!-- Start Dropdown Menu -->
                                    <ul class="fluxi-submenu list-unstyled menu-home">
                                        <li class="nav-item"><a class="nav-link page" href="{{ url('graphics-designing')}}">Graphics Designing</a></li>
                                        <li class="nav-item"><a class="nav-link page" href="{{ url('web-designing')}}">Web Designing</a></li>
                                        <li class="nav-item"><a class="nav-link page" href="{{ url('web-development')}}">Web Development</a></li>
                                        <li class="nav-item"><a class="nav-link page" href="{{ url('seo')}}">SEO (Search Engine Optimizations)</a></li>
                                        <li class="nav-item"><a class="nav-link page" href="{{ url('smm')}}">SMM (Social Media Marketing)</a></li>
                                        <li class="nav-item"><a class="nav-link page" href="{{ url('google-ads')}}">Google Ads (PPC)</a></li>
                                        
                                    </ul>
                                    <!-- End Dropdown Menu -->
                                </li>
                                
                                

                                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="{{ url('blog')}}">Blog</a></li>
                                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="{{ url('faqs')}}">Faqs</a></li>
                                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="{{ url('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="button-area-start">
                            <a class="call-us" href="tel:+917011116044">Call Us : +91 7011116044</a>
                            <a href="#" class="rts-btn btn-primary">Free Audit</a>
                            <div class="menu-btn" id="menu-btn">

                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>