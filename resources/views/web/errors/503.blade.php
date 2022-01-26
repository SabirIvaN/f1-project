@extends('web.layout.app', [
    'code' => __('views.web.errors.503.code'),
    'description' => __('views.web.errors.503.description'),
    'error' => true,
])

@section('title', __('views.web.errors.503.title'))
