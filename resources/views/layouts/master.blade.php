<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ $setting->meta_keywords }}">
    <meta name="author" content="{{ $setting->meta_author }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('upload/favicon.ico') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/meanmenu/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Plugin CSS -->
    @stack('plugin-css')

    <!-- Font CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-5/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/elegant-font/elegantFont.css') }}">

    <!-- Template CSS -->
    {{-- @vite('public/asset/css/frontend.css') --}}
    <link rel="stylesheet" href="{{ asset('asset/css/frontend.css') }}">

    <!-- Custom CSS -->
    @stack('custom-css')
</head>

<body>
    <div class="preloader accent_color white_bg">
        <div class="preloader_bg center accent_bg">
            <div class="preloader_in accent_border">
                <img src="{{ asset('upload/logoServiam.png') }}" class="preloader_img" alt="Logo" />
            </div>
        </div>
    </div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <!-- Core JS -->
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/meanmenu/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope/isotope.min.js') }}"></script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/images-loaded/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    <!-- Plugin JS -->
    @stack('plugin-js')

    <!-- Template JS -->
    {{-- @vite('public/asset/js/frontend.js') --}}
    <script src="{{ asset('asset/js/frontend.js') }}"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages = document.querySelectorAll("img.lazy");
            var lazyloadThrottleTimeout;

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        });
    </script>

    <!-- Custom JS -->
    @stack('custom-js')
</body>

</html>
