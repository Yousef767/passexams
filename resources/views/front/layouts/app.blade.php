<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/front/media/tap-icon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/front/media/tap-icon.svg') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/front/media/tap-icon.svg') }}" />
    <meta name="color-scheme" content="light only">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/front/js/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/scss/style.css') }}">
    <title>passexam - @yield('title', 'نحن نجتاز امتحاناتك عبر الإنترنت ')</title>
    @stack('css')
</head>

<body>

    @include('front.layouts.includes._nav')

    <div class="goTop">
        <span>
            <i class="fa-solid fa-angle-up"></i>
        </span>
    </div>

    <div class="homeMedia" id="homeMedia">
        <div class="icon"><i class="fa-solid fa-headset"></i></div>
        <div class="hlk">
          <a class="fadeL" href="##"><i class="fa-brands fa-whatsapp"></i></a>
          <a class="fadeL200" href="##"><i class="fa-brands fa-telegram"></i></a>
        </div>
      </div>
    @yield('content')


    @include('front.layouts.includes._footer')
</body>

</html>
