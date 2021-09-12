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
|                  |                                |
| ---------------- | ------------------------------ |
| @lang('ФИО:')    | {!! $order->name !!}           |
| @lang('Телефон:')| {!! $order->phone !!}          |
| @lang('Услуга:') | {!! $order->service->name !!}  |
| @lang('Цена:')   | {!! $order->service->price !!} |
| @lang('Город:')  | {!! $order->city->name !!}     |
| @lang('Адрес:')  | {!! $order->address !!}        |
@endcomponent

{{-- Salutation --}}
@if(!empty($salutation))
{{ $salutation }}
@else
@lang('С уважением, ')
{{ config('app.name') }}
@endif

@endcomponent
