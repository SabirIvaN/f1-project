@extends('web.layout.app', [
    'code' => __('errors.403.code'),
    'description' => __('errors.403.description'),
    'error' => true,
])

@section('title', __('errors.403.title'))
