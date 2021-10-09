@extends('web.layout.app')

@section('title', __('web.layout.subviews.header.welcome.title'))

@section('content')
<section class="my-4 py-4">
    <h2 class="fs-1 fw-bold my-5">
        <span id="start-banner-ru">
            {!! __('web.content.welcome.banner.start.title.ru') !!}
        </span>
        <span class="d-none" id="start-banner-en">
            {!! __('web.content.welcome.banner.start.title.en') !!}
        </span>
    </h2>
    <p class="fs-4">
        {!! __('web.content.welcome.banner.start.description') !!}
    </p>
</section>
<section class="my-4 py-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('web.content.welcome.benefit.title') !!}
    </h3>
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('web.content.welcome.benefit.first.title') !!}
            </h3>
            <p>
                {!! __('web.content.welcome.benefit.first.description') !!}
            </p>
        </div>
        <div class="col-md-5 fw-bold text-center py-3">
            <pre class="fs-1 smile-green">( ^ ‿ ~ )</pre>
        </div>
    </div>
    <div class="row align-items-center mb-4">
        <div class="col-md-5 fw-bold text-center py-3">
            <pre class="fs-1 smile-yellow">( o ‿ o )</pre>
        </div>
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('web.content.welcome.benefit.second.title') !!}
            </h3>
            <p>
                {!! __('web.content.welcome.benefit.second.description') !!}
            </p>
        </div>
    </div>
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('web.content.welcome.benefit.third.title') !!}
            </h3>
            <p>
                {!! __('web.content.welcome.benefit.third.description')  !!}
            </p>
        </div>
        <div class="col-md-5 fw-bold text-center py-3">
            <pre class="fs-1 smile-red">♡( ◡ ‿ ◡ )</pre>
        </div>
    </div>
</section>
<section class="my-4 pb-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('web.content.welcome.service.title') !!}
    </h3>
    <div class="container px-3">
        <div class="row text-center">
            @include('web.content.service.subviews.element')
        </div>
        <p class="text-center">
            {!! __('web.content.welcome.service.remark') !!}
        </p>
    </div>
</section>
<section class="mt-4 mb-5 py-5">
    <h2 class="fs-1 fw-bold text-center">
        <span id="end-banner-ru">
            {!! __('web.content.welcome.banner.end.title.ru') !!}
        </span>
        <span class="d-none" id="end-banner-en">
            {!! __('web.content.welcome.banner.end.title.en') !!}
        </span>
    </h2>
</section>
@endsection

@push('scripts')
    <script src="{!! secure_asset('js/pages/welcome.js') !!}"></script>
@endpush
