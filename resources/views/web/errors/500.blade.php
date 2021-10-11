@extends('web.layout.app', [
    'code' => __('errors.500.code'),
    'description' => __('errors.500.description'),
    'error' => true,
])

@section('title', __('errors.500.title'))
