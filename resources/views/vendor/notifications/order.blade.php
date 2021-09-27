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
|                           |                          |
| ------------------------- | ------------------------ |
@foreach ($rows as $row)
| @lang($row['title'])     | {!! $row['content'] !!} |
@endforeach
@endcomponent

{{-- Salutation --}}
@if(!empty($salutation))
{{ $salutation }}
@else
@lang(__('notification.order.goodbye'))
{{ config('app.name') }}.
@endif

@endcomponent
