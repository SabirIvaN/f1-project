@extends('web.layout.app', [
    'code' => '503',
    'description' => __('errors.serviceUnavailable'),
    'error' => true,
])

@section('title', '503')
