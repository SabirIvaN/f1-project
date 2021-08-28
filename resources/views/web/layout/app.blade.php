<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ __('layout.name') }} — @yield('title')</title>
</head>
<body>
    <header>
        @include('web.layout.subviews.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('web.layout.subviews.footer')
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>