@extends('web.layout.app')

@section('title', __('pages.welcome.title'))

@section('content')
<section class="my-4 py-4">
    <div class="container">
        <h2 class="fs-1 fw-bold my-5">
            {!! __('content.welcome.banners.start.title') !!}
        </h2>
        <p class="fs-4">
            {!! __('content.welcome.banners.start.description') !!}
        </p>
    </div>
</section>
<section class="my-4 py-4">
    <div class="container">
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
            <div class="col-md-5 fs-2 fw-bold text-center py-3">
                ( ^ ‿ ~ )
            </div>
        </div>
        <div class="row align-items-center mb-4">
            <div class="col-md-5 fs-2 fw-bold text-center py-3">
                ( ◕ ‿ ◕ )
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
            <div class="col-md-5 fs-2 fw-bold text-center py-3">
                ♡( ◡ ‿ ◡ )
            </div>
        </div>
    </div>
</section>
<section class="my-4 pb-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('content.welcome.services.title') !!}
    </h3>
    <div class="container px-3">
        <div class="row text-center">
            @each('web.service.subviews.element', $services, 'service')
        </div>
        <p class="text-center">
            {!! __('content.welcome.services.remark') !!}
        </p>
    </div>
</section>
<section class="mt-4 mb-5 py-5">
    <div class="container">
        <h2 class="fs-1 fw-bold text-center">
            {!! __('content.welcome.banners.end.title') !!}
        </h2>
    </div>
</section>
@endsection
