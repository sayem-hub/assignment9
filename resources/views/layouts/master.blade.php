<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('assets/external/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/external/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/external/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/external/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/external/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/external/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    </head>
<body>

   

    <header>
        @include('components.navbar')
    </header>


    <main id="main">
        @yield('content')
    </main>



    <footer>
        @include('components.footer')
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
       
    <script src="{{ asset('assets/external/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/external/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/external/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/external/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/external/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/external/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/external/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/external/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/external/php-email-form/validate.js') }}"></script>


    <script src="{{ asset('assets/js/main.js') }}"></script>

    
</body>
</html>
