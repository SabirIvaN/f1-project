@foreach(session('flash_notification', collect())->toArray() as $message)
    @if($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title' => $message['title'],
            'body' => $message['message']
        ])
    @else
        <div class="alert alert-{!! $message['level'] !!} {!! $message['important'] ? 'alert-dismissible' : '' !!} mt-3" role="alert">
            @if($message['important'])
                {!! Form::button(__('views.vendor.flash.message.close_button'), ['class' => 'btn-close d-none fs-0', 'data-bs-dismiss' => 'alert', 'aria-label' => 'Close']) !!}
            @endif
            {!! $message['message'] !!}
        </div>
    @endif
@endforeach

{!! session()->forget('flash_notification') !!}
