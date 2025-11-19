<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="canonical" href="@yield('canonical')">
    <!-- Canonical -->

    <!-- Robots -->
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Best Digital Marketing Agency in Noida | Axione Solutions">
    <meta property="og:description" content="Grow your brand faster with Noida’s top digital marketing experts at Axione Solutions with SEO, SMM, PPC, and full digital marketing services.">
    <meta property="og:url" content="https://axionesolutions.in/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://axionesolutions.in/assets/images/og-image.jpg">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Digital Marketing Agency in Noida | Axione Solutions">
    <meta name="twitter:description" content="Axione Solutions offers SEO, SMM, PPC, Web Development & full digital marketing services in Noida to grow your business.">
    <meta name="twitter:image" content="https://axionesolutions.in/assets/images/og-image.jpg">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/axione-solutions-logo-fvn.png')}}">
    <!-- swiper css -->
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/swiper.min.css')}}" as="style">
    <!-- magnific popup css -->
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/magnific-popup.css')}}" as="style">
    <!-- metismenu css -->
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/metismenu.css')}}" as="style">
    <!-- bootstrap css -->
    <link rel="stylesheet preload" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}" as="style">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet preload" href="{{ asset('assets/css/custom.css')}}" as="style">



    <script src="{{ asset('assets/js/plugins/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/metismenu.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jqueryui.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/theia-sticky-sidebar.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/scrolltigger.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/split-text.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/split-type.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/waw.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/counter-up.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js')}}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/js/plugins/contact-form.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>

</head>
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    @include('partials.mobile')
    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
