@component('mail::message')

{{-- Greeting --}}
@if (!empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang(__('notification.order.error'))
@else
# @lang(__('notification.order.greeting'))
@endif
@endif

{{-- Lines --}}
@foreach($introLines as $line)
<p>{{ $line }}</p>
@endforeach

{{-- Service --}}
@component('mail::table')
|                                    |                                                    |
| ---------------------------------- | -------------------------------------------------- |
| @lang($order['name']['title'])     | {!! $order['name']['content'] !!}                  |
| @lang($order['phone']['title'])    | {!! $order['phone']['content'] !!}                 |
| @lang($order['service']['title'])  | {!! $order['service']['content']->flatten()[0] !!} |
| @lang($order['price']['title'])    | {!! $order['price']['content']->flatten()[0] !!}   |
| @lang($order['city']['title'])     | {!! $order['city']['content']->flatten()[0] !!}    |
| @lang($order['address']['title'])  | {!! $order['address']['content'] !!}               |
@endcomponent

{{-- Salutation --}}
@if(!empty($salutation))
{{ $salutation }}
@else
@lang(__('notification.order.goodbye'))
{{ config('app.name') }}.
@endif

@endcomponent
