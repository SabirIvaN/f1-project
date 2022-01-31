@extends('web.layout.app', [
    'code'        => __('views.web.errors.401.code'),
    'description' => __('views.web.errors.401.description'),
    'error'       => true,
])

@section('title', __('views.web.errors.401.title'))
