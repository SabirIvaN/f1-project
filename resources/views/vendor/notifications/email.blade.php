@component('mail::message')

{{-- Greeting --}}
@if (!empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Упс!')
@else
# @lang('Здравствуйте!')
@endif
@endif

{{-- Lines --}}
@foreach($introLines as $line)
<p>{{ $line }}</p>
@endforeach

{{-- Service --}}
@component('mail::table')
|                  |                                                                             |
| ---------------- | --------------------------------------------------------------------------- |
| @lang('ФИО:')    | {!! $order->name !!}                                                        |
| @lang('Телефон:')| {!! $order->phone !!}                                                       |
| @lang('Услуга:') | @foreach ($order->services as $service) {!! $service->name !!} @endforeach  |
| @lang('Цена:')   | @foreach ($order->services as $service) {!! $service->price !!} руб. @endforeach |
| @lang('Город:')  | @foreach ($order->cities as $city) {!! $city->name !!} @endforeach          |
| @lang('Адрес:')  | {!! $order->address !!}                                                     |
@endcomponent

{{-- Salutation --}}
@if(!empty($salutation))
{{ $salutation }}
@else
@lang('С уважением, ')
{{ config('app.name') }}
@endif

@endcomponent
