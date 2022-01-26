@extends('web.layout.app', [
    'code' => __('views.web.errors.403.code'),
    'description' => __('views.web.errors.403.description'),
    'error' => true,
])

@section('title', __('views.web.errors.403.title'))
