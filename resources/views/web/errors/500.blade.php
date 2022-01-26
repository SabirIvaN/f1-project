@extends('web.layout.app', [
    'code' => __('views.web.errors.500.code'),
    'description' => __('views.web.errors.500.description'),
    'error' => true,
])

@section('title', __('views.web.errors.500.title'))
