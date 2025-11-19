@extends('layouts.app')

@section('title', 'Blog - Tips, SEO Guides & Online Growth Strategies | Axione Solutions')
@section('meta_description', 'Explore Axione Solutions’ blog for expert tips on SEO, SMM, PPC, branding, and digital marketing strategies to grow your business online.')
@section('canonical', 'https://axionesolutions.in/blog')

@section('content')

<!-- page area section -->
    <div class="contact-banner-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner main inner contact areas start -->
                    <div class="text-center">
                        <h1 class="title skew-up-2">Blog</h1>
                        <div class="pagimation title skew-up-2">
                            <a href="index.html">Home</a> >
                            Blog
                        </div>
                    </div>
                    <!-- banner main inner contact areas end -->
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('assets/images/about/s2.png')}}" alt="shape" class="one">
            <img src="{{ asset('assets/images/about/s4.png')}}" alt="shape" class="two">
            <img src="{{ asset('assets/images/about/s2.png')}}" alt="shape" class="three">
            <img src="{{ asset('assets/images/about/s1.png')}}" alt="shape" class="four">
        </div>
    </div>
    <!-- page area section -->
    
    <div class="rts-section-gap rts-blog-area-one pt--100 pb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one-center">
                        <h2 class="title skew-up">Stay updated with trends, tips, <br> and insights that keep you ahead.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-48 mt--0">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area-style-one">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-1.webp')}}" alt="blog-image">
                        </a>
                        <div class="inner-content-wrapper">
                            <a href="#">
                                <h6 class="title">
                                    Why Good Design Is the First Step to Winning Customers Online?
                                </h6>
                            </a>
                            <div class="bottom-area">
                                <span class="admin">Axione Solutions</span>
                                <span class="date">• 25 Aug, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area-style-one">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-2.webp')}}" alt="blog-image">
                        </a>
                        <div class="inner-content-wrapper">
                            <a href="#">
                                <h6 class="title">
                                    How to Read Your Website Analytics Without Feeling Overwhelmed?
                                </h6>
                            </a>
                            <div class="bottom-area">
                                <span class="admin">Axione Solutions</span>
                                <span class="date">• 27 Aug, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area-style-one">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-3.webp')}}" alt="blog-image">
                        </a>
                        <div class="inner-content-wrapper">
                            <a href="#">
                                <h6 class="title">
                                    Simple Digital Marketing Habits Every Business Owner Should Try.
                                </h6>
                            </a>
                            <div class="bottom-area">
                                <span class="admin">Axione Solutions</span>
                                <span class="date">• 31 Aug, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>

                <div class="col-lg-12  text-center">
                    <a href="#" class="rts-btn btn-primary text-center">Load More</a>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img class="one" src="{{ asset('assets/images/testimonials/shape/download-1.png')}}" alt="shape">
            <img class="two" src="{{ asset('assets/images/testimonials/shape/download-2.png')}}" alt="shape">
            <img class="three" src="{{ asset('assets/images/testimonials/shape/download-3.png')}}" alt="shape">
        </div>
    </div>
@endsection