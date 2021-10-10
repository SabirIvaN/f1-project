<!DOCTYPE html>
<html lang="{!! str_replace('_', '-', app()->getLocale()) !!}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! secure_asset('css/app.css') !!}">

    <title>{!! __('web.layout.title') !!} — @yield('title')</title>
</head>
<body>
    @if (!empty($error))
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

                    {!! Form::button(__('web.layout.button.close.title'), ['class' => 'btn-close', 'data-bs-dismiss' => 'alert', 'aria-label' => 'Close']) !!}
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

        @if (url()->current() === route('welcome.show'))
        <section>
            @include('web.content.order.subviews.pop-up')
        </section>
        @endif

        <!-- Scripts -->
        <script src="{!! secure_asset('js/app.js') !!}" defer></script>
        @stack('scripts')
    @endif
</body>
</html>
