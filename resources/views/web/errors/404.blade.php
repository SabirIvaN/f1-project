@extends('web.layout.app', [
    'code' => __('errors.404.code'),
    'description' => __('errors.404.description'),
    'error' => true,
])

@section('title', __('errors.404.title'))
