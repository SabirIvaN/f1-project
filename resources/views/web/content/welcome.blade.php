@extends('web.layout.app')

@section('title', __('views.web.content.welcome.title'))

@section('content')
<section class="my-4 py-4">
    <h2 class="fs-1 fw-bold my-5">
        <span id="start-banner-ru">
            {!! __('views.web.content.welcome.banner.starting_banner.ru') !!}
        </span>
        <span class="d-none" id="start-banner-en">
            {!! __('views.web.content.welcome.banner.starting_banner.en') !!}
        </span>
    </h2>
    <p class="fs-4">
        {!! __('views.web.content.welcome.company_description') !!}
    </p>
</section>
<section class="my-4 py-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('views.web.content.welcome.benefits.header') !!}
    </h3>
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('views.web.content.welcome.benefits.first.header') !!}
            </h3>
            <p>
                {!! __('views.web.content.welcome.benefits.first.description') !!}
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
                {!! __('views.web.content.welcome.benefits.second.header') !!}
            </h3>
            <p>
                {!! __('views.web.content.welcome.benefits.second.description') !!}
            </p>
        </div>
    </div>
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h3 class="fs-3 fw-bold mb-3">
                {!! __('views.web.content.welcome.benefits.third.header') !!}
            </h3>
            <p>
                {!! __('views.web.content.welcome.benefits.third.description') !!}
            </p>
        </div>
        <div class="col-md-5 fw-bold text-center py-3">
            <pre class="fs-1 smile-red">♡( ◡ ‿ ◡ )</pre>
        </div>
    </div>
</section>
<section class="my-4 pb-4">
    <h3 class="fs-1 fw-bold text-center my-5">
        {!! __('views.web.content.welcome.service.header') !!}
    </h3>
    <div class="container px-3">
        <div class="row text-center">
            @include('web.content.service.subviews.element')
        </div>
        <p class="text-center">
            {!! __('views.web.content.welcome.service.remark') !!}
        </p>
    </div>
</section>
<section class="mt-4 mb-5 py-5">
    <h2 class="fs-1 fw-bold text-center">
        <span id="end-banner-ru">
            {!! __('views.web.content.welcome.banner.final_banner.ru') !!}
        </span>
        <span class="d-none" id="end-banner-en">
            {!! __('views.web.content.welcome.banner.final_banner.en') !!}
        </span>
    </h2>
</section>
@endsection

@push('scripts')
    <script src="{!! mix('js/pages/welcome.js') !!}" defer></script>
@endpush
