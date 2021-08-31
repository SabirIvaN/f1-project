@extends('web.layout.app')

@section('title', __('content.welcome.title'))

@section('content')
<section class="my-4 py-4">
    <h2 class="fs-1 fw-bold my-5">
        {!! __('content.welcome.banners.start.title') !!}
    </h2>
    <p class="fs-4">
        {!! __('content.welcome.banners.start.description') !!}
    </p>
</section>
<section class="my-4 py-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('content.welcome.benefits.title') !!}
    </h3>
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('content.welcome.benefits.first.title') !!}
            </h3>
            <p>
                {!! __('content.welcome.benefits.first.description') !!}
            </p>
        </div>
        <div class="col-md-5 fs-1 fw-bold text-center py-3">
            <span class="smile-green">( ^ ‿ ~ )</span>
        </div>
    </div>
    <div class="row align-items-center mb-4">
        <div class="col-md-5 fs-1 fw-bold text-center py-3">
            <span class="smile-yellow">( ◕ ‿ ◕ )</span>
        </div>
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('content.welcome.benefits.second.title') !!}
            </h3>
            <p>
                {!! __('content.welcome.benefits.second.description') !!}
            </p>
        </div>
    </div>
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('content.welcome.benefits.third.title') !!}
            </h3>
            <p>
                {!! __('content.welcome.benefits.third.description') !!}
            </p>
        </div>
        <div class="col-md-5 fs-1 fw-bold text-center py-3">
            <span class="smile-red">♡( ◡ ‿ ◡ )</span>
        </div>
    </div>
</section>
<section class="my-4 pb-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('content.welcome.services.title') !!}
    </h3>
    <div class="container px-3">
        <div class="row text-center">
            @include('web.content.service.subviews.element')
        </div>
        <p class="text-center">
            {!! __('content.welcome.services.remark') !!}
        </p>
    </div>
</section>
<section class="mt-4 mb-5 py-5">
    <h2 class="fs-1 fw-bold text-center">
        {!! __('content.welcome.banners.end.title') !!}
    </h2>
</section>
@endsection
