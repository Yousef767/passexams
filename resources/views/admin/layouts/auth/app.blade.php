<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/back/media/icons/tap.svg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('assets/back/media/icons/tap.svg') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/back/media/icons/tap.svg') }}" />
    <meta property="og:image" content="{{ asset('assets/back/media/icons/tap.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/back/media/icons/tap.svg') }}" />
    <meta name="color-scheme" content="light only">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/back/scss/style.css') }}">
    <title>Pass Exams - @yield('title')</title>
    <style>
        .invalid-feedback{
            color: red !important;
        }
    </style>
</head>

<body>
    <!-- Start Nav -->
    <nav class="nav">
        <div class="logo">
            <img class="imgg" src="{{ asset('assets/back/media/logo.png') }}" alt="">
        </div>
        <a href="##"> <i class="fa-light fa-browser"></i> Go to website</a>
    </nav>
    <!-- End Nav -->
    @yield('content')



    @if ($errors->any())
        <!-- Fail Message -->
        <div class="message failM">
            <span>Login Failed</span>
        </div>
    {{-- @else
        <div class="message sucessM">
            <span>Login Sucessfully</span>
        </div> --}}
    @endif

</body>

<script src="{{ asset('assets/back/js/main.js') }}"></script>
<script src="{{ asset('assets/back/js/scroll.js') }}"></script>


</html>
