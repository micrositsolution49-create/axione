<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Axione Solutions')</title>
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
