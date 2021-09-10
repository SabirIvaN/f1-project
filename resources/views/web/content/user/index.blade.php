@extends('web.layout.app')

@section('title', __('views.web.layout.subviews.header.user.title'))

@section('content')
<section>
    <h2 class="fs-1 fw-bold text-center my-5">
        {!! __('views.web.content.user.index.contacts.title') !!}
    </h2>
    <div class="row row-cols-2 py-5">
        @include('web.content.user.subviews.element')
    </div>
</section>
@endsection
