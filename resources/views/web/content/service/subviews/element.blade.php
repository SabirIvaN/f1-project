<div class="col-sm-4 col-filing">
    <div class="card card-filing  my-4 shadow-sm rounded-0">
        <div class="card-header bg-white py-3">
            <h4 class="fs-4 fw-normal my-1">
                {{ $service->title }}
            </h4>
        </div>
        <div class="card-body py-3">
            <h5 class="fs-1 fw-bold my-1">
                ₽{{ $service->price }}
            </h5>
            <ul class="list-unstyled my-4">
                @foreach(explode(', ', $service->description) as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            <button class="btn btn-lg btn-primary w-100 fs-5 text-uppercase rounded-0" type="button">
                {!! __('content.service.subviews.element.button.title') !!}
            </button>
        </div>
    </div>
</div>
