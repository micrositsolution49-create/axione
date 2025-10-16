@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- page area section -->
    <div class="contact-banner-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner main inner contact areas start -->
                    <div class="text-center">
                        <h1 class="title skew-up-2">Contact Us</h1>
                        <div class="pagimation title skew-up-2">
                            <a href="index.html">Home</a> >
                            Contact Us
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
        <div class="rts-contact-form-area contact-form-page rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <br>
                    <form class="contact-form" action="#" method="post" id="contact-form">
                        <!-- single inpout-area -->
                        <div class="single-input-area">
                            <label for="name">Full name</label>
                            <input id="name" name="name" type="text" placeholder="Your name" required="">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <!-- single inpout-area end -->
                        <!-- single inpout-area -->
                        <div class="single-input-area">
                            <label for="email">Email address</label>
                            <input id="email" name="email" type="text" placeholder="Your email" required="">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <!-- single inpout-area end -->
                        <!-- single inpout-area -->
                        <div class="single-input-area text-area">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="Your message"></textarea>
                            <i class="fa-regular fa-message"></i>
                        </div>
                        <!-- single inpout-area end -->
                        <button type="submit" class="rts-btn btn-primary">Send message <i class="fa-solid fa-location-arrow"></i></button>

                        <!-- message send confirmation -->
                        <div id="form-messages" class="text-center text-primary mt-5 text-capitalize"></div>
                        <!-- message send confirmation end -->
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- rts single contact area start -->
    <div class="rts-contact-single-area rts-section-gap2Bottom pt--120">
        <div class="container">
            <div class="row g-48">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- single contact area start -->
                    <div class="single-contact-inner-info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/address.svg')}}" alt="address">
                        </div>
                        <h5 class="title">Address</h5>
                        <p>227, 2nd Floor, Anthurium, Sector 73, Noida, Uttar Pradesh 201301
</p>
                    </div>
                    <!-- single contact area end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- single contact area start -->
                    <div class="single-contact-inner-info mid">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/email.svg')}}" alt="email">
                        </div>
                        <h5 class="title">Email</h5>
                        <p>info@axionesolutions.in</p>
                    </div>
                    <!-- single contact area end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- single contact area start -->
                    <div class="single-contact-inner-info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/phone.svg')}}" alt="phone">
                        </div>
                        <h5 class="title">Phone</h5>
                        <p>+91 7011116044</p>
                    </div>
                    <!-- single contact area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts single contact area end -->
    


@endsection