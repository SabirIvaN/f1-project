@foreach ($services as $service)
<div class="modal fade" id="modal-{!! $service->id !!}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="{!! route('order.store') !!}" method="POST">
                @csrf
                @include('web.content.order.subviews.form')
            </form>
        </div>
    </div>
</div>
@endforeach
