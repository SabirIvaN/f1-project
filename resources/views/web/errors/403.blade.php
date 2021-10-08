@extends('web.layout.app', [
    'code' => '403',
    'description' => __('errors.forbidden'),
    'error' => true,
])

@section('title', '403')
