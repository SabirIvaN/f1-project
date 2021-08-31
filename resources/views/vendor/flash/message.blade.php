@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
    <div class="alert alert-{{ $message['level'] }} {{ $message['important'] ? 'alert-dismissible' : '' }} rounded-0 mt-3" role="alert">
        @if ($message['important'])
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
        {!! $message['message'] !!}
    </div>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}
