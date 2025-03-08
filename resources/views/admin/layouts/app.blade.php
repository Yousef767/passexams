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
        .alert {
            padding: 15px 20px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            position: relative;
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-danger a {
            color: #491217;
            text-decoration: underline;
            font-weight: bold;
        }

        .alert-danger a:hover {
            color: #2d0c0e;
            text-decoration: none;
        }

        .alert .close {
            position: absolute;
            top: 10px;
            right: 15px;
            color: inherit;
            font-size: 20px;
            line-height: 1;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            outline: none;
        }
    </style>
    @stack('css')
</head>

<body>
    @include('admin.layouts.includes._nav')
    <div class="dcont">
        @include('admin.layouts.includes._sidebar')
        <div class="mainCont" id="main">
            {{-- Handel Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</body>
@include('admin.layouts.includes._footer')

</html>
