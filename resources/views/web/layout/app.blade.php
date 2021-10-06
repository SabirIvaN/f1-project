<!DOCTYPE html>
<html lang="{!! str_replace('_', '-', app()->getLocale()) !!}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! mix('css/app.css') !!}">

    <title>{!! __('web.layout.title') !!} — @yield('title')</title>
</head>
<body>
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
    <script src="{!! mix('js/app.js') !!}"></script>
    @stack('scripts')
</body>
</html>
