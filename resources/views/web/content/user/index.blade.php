@extends('web.layout.app')

@section('title', __('views.web.content.user.index.title'))

@section('content')
<h4 class="fs-1 fw-bold text-center my-5 pt-4">
    {!! __('views.web.content.user.index.header') !!}
</h4>
<section>
    <div class="row row-cols-2 my-5">
        <div class="col-sm-4 col-md-filing mb-5">
            <h5 class="fs-4">
                {!! __('views.web.content.user.index.corporate_mail.header') !!}
            </h5>
        </div>
        <div class="col-sm-4 col-md-filing mb-4">
            <h4 class="fs-4 mb-2">
                {!! __('views.web.content.user.index.corporate_mail.sales.header') !!}:
            </h4>
            <b>
                {!! __('views.web.content.user.index.corporate_mail.sales.email') !!}
            </b>
        </div>
        <div class="col-sm-4 col-md-filing mb-4">
            <h4 class="fs-4 mb-2">
                {!! __('views.web.content.user.index.corporate_mail.tech.header') !!}:
            </h4>
            <b>
                {!! __('views.web.content.user.index.corporate_mail.tech.email') !!}
            </b>
        </div>
    </div>
    <div class="row row-cols-2">
        <div class="col-sm-4 col-md-filing mb-5">
            <h5 class="fs-4">
                {!! __('views.web.content.user.index.employees_email.header') !!}
            </h5>
        </div>

        @include('web.content.user.subviews.element')

    </div>
</section>
@endsection
