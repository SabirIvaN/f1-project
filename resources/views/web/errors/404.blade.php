@extends('web.layout.app', [
    'code' => '404',
    'description' => __('errors.notFound'),
    'error' => true,
])

@section('title', '404')
