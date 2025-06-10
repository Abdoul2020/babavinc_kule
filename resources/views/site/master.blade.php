<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"{!! theme()->printHtmlAttributes('html') !!}
    {{ theme()->printHtmlClasses('html') }}>

<head>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="manifest" href="{{ asset('assets/site/img/vinc.png') }}">

    <title>@yield('title', 'Baba Vinç - Kule Vinç Hizmetleri')</title>
    @yield('meta_tags')



    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/site/img/vinc.png') }}">
    <link rel="manifest" href="{{ asset('assets/site/img/vinc.png') }}">



    <!-- babavinc web -->


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    @include('site.layouts.css')
    @yield('styles')
    
</head>

<body>
    <!-- main-area -->

    <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"> BabaVinç...</span>
        </div>
    </div>
    <!-- Spinner End -->

         @include('site.layouts.header')
        @yield('content')

        @include('site.layouts.footer')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    
    @include('site.layouts.js')
    @yield('scripts')

</body>

</html>
