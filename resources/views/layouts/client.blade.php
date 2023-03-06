<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Zpeed Solutions</title>
    {{-- <title>{{ config('app.name', 'Zpeed Auto-HR') }}</title> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css'); }}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css'); }} " type="text/css"> 
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

     
      @media (min-width: 992px) {
        .rounded-lg-3 { border-radius: .3rem; }
      }

      #li-btn {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }
        
    </style>
    
</head>

<body class="bg-dark">
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/vendor/purecounter/purecounter.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/typed.js/typed.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js'); }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/js/main.js'); }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
