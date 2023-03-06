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
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }


      .floating-btn {
            /* display: none; */
            font-weight: bold;
            position: fixed;
            top: 20px;
            left: 30px;
            z-index: 99;
            font-size: 18px;
            cursor: pointer;
            padding: 15px;
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

<body>
    @include('inc.navbar-admin')
    @yield('content')
    @include('inc.footer')


    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/vendor/purecounter/purecounter.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/typed.js/typed.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js'); }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/js/main.js'); }}"></script>
    <script>
        function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>
</body>
</html>
