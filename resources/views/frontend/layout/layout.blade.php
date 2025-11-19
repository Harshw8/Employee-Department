<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aximo - Creative Agency Tailwind Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}" type="image/x-icon" />

    <!-- Site font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/webfonts/inter/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/webfonts/syne/stylesheet.css') }}" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/jos.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/menu.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}" />
    <!-- Development css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="/assets/css/style.min.css" /> -->
</head>

<body class="bg-colorIvory">
    <div class="page-wrapper">
      @include('frontend.include.header')  

        <!-- Main Wrapper Start -->
        <main class="main-wrapper">

          @yield('main_content')
        </main>

       @include('frontend.include.footer')

    <!--Vendor js-->
    <script src="{{asset('frontend/assets/js/vendors/counterup.js')}}" type="module"></script>
    <script src="{{asset('frontend/assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/fslightbox.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/jos.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/menu.js')}}"></script>

    <!-- Main js -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
