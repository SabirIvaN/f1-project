@extends('web.layout.app', [
    'code' => '401',
    'description' => __('errors.unauthorized'),
    'error' => true,
])

@section('title', '401')
