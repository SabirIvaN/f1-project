@foreach($services as $service)
    <div class="col-sm-4 col-sm-filing">
        <div class="card card-filing  my-4 shadow-sm">
            <div class="card-header bg-white py-3">
                <h4 class="fs-4 fw-normal my-1">
                    {!! $service->name !!}
                </h4>
            </div>
            <div class="card-body py-3">
                <h5 class="fs-1 fw-bold my-1">
                    {!! $service->price !!}
                </h5>
                <ul class="list-unstyled my-4">
                    @foreach(explode(', ', $service->description) as $item)
                        <li>{!! $item !!}</li>
                    @endforeach
                </ul>
                <a class="btn btn-lg btn-primary w-100 fs-5 text-uppercase" href="{!! route('order.create', $service->id) !!}" data-bs-toggle="modal" data-bs-target="#modal-{!! $service->id !!}">
                    {!! __('views.web.content.service.subviews.element.selection_button') !!}
                </a>
            </div>
        </div>
    </div>
@endforeach
