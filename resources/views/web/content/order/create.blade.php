@extends('web.layout.app')

@section('title', $service->name)

@section('content')
    @include('web.content.order.subviews.form')
@endsection
