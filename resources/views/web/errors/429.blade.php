@extends('web.layout.app', [
    'code' => '429',
    'description' => __('errors.tooManyRequests'),
    'error' => true,
])

@section('title', '429')
