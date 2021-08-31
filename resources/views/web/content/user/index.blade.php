@extends('web.layout.app')

@section('title', __('content.user.title'))

@section('content')
<section>
    <h2 class="fs-1 fw-bold text-center my-5">
        {!! __('content.user.contacts.title') !!}
    </h2>
    <div class="row row-cols-2 py-5">
        @each('web.content.user.subviews.element', $users, 'user')
    </div>
</section>
@endsection
