@extends('web.layout.app', [
    'code' => __('errors.401.code'),
    'description' => __('errors.401.description'),
    'error' => true,
])

@section('title', __('errors.401.title'))
