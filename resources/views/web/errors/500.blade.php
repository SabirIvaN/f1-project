@extends('web.layout.app', [
    'code' => '500',
    'description' => __('errors.serverError'),
    'error' => true,
])

@section('title', '500')
