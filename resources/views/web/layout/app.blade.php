<!DOCTYPE html>
<html lang="{!! str_replace('_', '-', app()->getLocale()) !!}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all"/>

    {!! SEOMeta::generate() !!}

    <!-- Favicons -->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{!! asset('mstile-144x144.png') !!}">
    <meta name="msapplication-config" content="{!! asset('browserconfiguration.xml') !!}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('favicon-16x16.png') !!}">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('favicon-32x32.png') !!}">
    <link rel="icon" type="image/png" sizes="48x48" href="{!! asset('favicon-48x48.png') !!}">
    <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('apple-touch-icon-60x60.png') !!}">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('apple-touch-icon-76x76.png') !!}">
    <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('apple-touch-icon-120x120.png') !!}">
    <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('apple-touch-icon-152x152.png') !!}">
    <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('apple-touch-icon-180x180.png') !!}">
    <link rel="mask-icon" href="{!! asset('favicon-apple-safari-icon.svg') !!}">
    <link rel="manifest" href="{!! asset('site.webmanifest') !!}">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! mix('css/app.css') !!}">

    <title>{!! config('app.name') !!} — @yield('title')</title>
</head>

<body>
    @if(!empty($error))
        <div class="w-100 h-100 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1 class="display-1 fw-bold mb-3">{!! $code !!}</h1>
                <span class="fs-3 mb-4">{!! $description !!}</span>
            </div>
        </div>
    @else
        <header>
            @include('web.layout.subviews.header')
        </header>

        <main>
            <div class="container">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger my-5 py-5" role="alert">
                            {!! $error !!}

                            {!! Form::button(__('views.web.layout.app.close_button'), ['class' => 'btn-close', 'data-bs-dismiss' => 'alert', 'aria-label' => 'Close']) !!}
                        </div>
                    @endforeach
                @endif

                @include('flash::message')

                @yield('content')
            </div>
        </main>

        <footer>
            @include('web.layout.subviews.footer')
        </footer>

        @if(url()->current() === route('welcome.show'))
            <section>
                @include('web.content.order.subviews.pop-up')
            </section>
        @endif

        <!-- Scripts -->
        <script src="{!! mix('js/app.js') !!}" defer></script>
        @stack('scripts')
    @endif
</body>

</html>
