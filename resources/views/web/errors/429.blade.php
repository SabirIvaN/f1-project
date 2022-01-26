@extends('web.layout.app', [
    'code' => __('views.web.errors.429.code'),
    'description' => __('views.web.errors.429.description'),
    'error' => true,
])

@section('title', __('views.web.errors.429.title'))
