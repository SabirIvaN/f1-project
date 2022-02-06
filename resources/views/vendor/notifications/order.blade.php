@component('mail::message')

{{-- Greeting --}}
@if (!empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang(__('views.vendor.notifications.order.error'))
@else
# @lang(__('views.vendor.notifications.order.greeting'))
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
| @lang($row['header'])      |  {!! $row['content'] !!} |
@endforeach
@endcomponent

{{-- Salutation --}}
@if(!empty($salutation))
{{ $salutation }}
@else
@lang(__('views.vendor.notifications.order.goodbye'))
{{ config('app.name') }}.
@endif

@endcomponent
