@extends('web.layout.app', [
    'code' => __('views.web.errors.404.code'),
    'description' => __('views.web.errors.404.description'),
    'error' => true,
])

@section('title', __('views.web.errors.404.title'))
