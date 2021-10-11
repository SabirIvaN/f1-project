@extends('web.layout.app', [
    'code' => __('errors.503.code'),
    'description' => __('errors.503.description'),
    'error' => true,
])

@section('title', __('errors.503.title'))
