@csrf
<input type="hidden" id="service" name="service" value="{!! $service->id !!}">
<div class="modal-header text-center py-3">
    <h5 class="modal-title w-100 fs-4" id="exampleModalLabel">
        {!! $service->name !!}
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body py-3">
    <div class="mb-3">
        <label for="name" class="col-form-label">
            {!! __('content.order.subviews.modal.name.title') !!}
        </label>
        <input type="text" class="form-control rounded-0" id="name" name="name" placeholder="{!! __('content.order.subviews.modal.name.placeholder') !!}">
    </div>
    <div class="row row-cols-2">
        <div class="col col-md-filing mb-3">
            <label for="phone" class="col-form-label">
                {!! __('content.order.subviews.modal.phone.title') !!}
            </label>
            <input type="tel" class="form-control rounded-0" id="phone" name="phone" placeholder="{!! __('content.order.subviews.modal.phone.placeholder') !!}">
        </div>
        <div class="col col-md-filing mb-3">
            <label for="email" class="col-form-label">
                {!! __('content.order.subviews.modal.email.title') !!}
            </label>
            <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="{!! __('content.order.subviews.modal.email.placeholder') !!}">
        </div>
    </div>
    <div class="row row-cols-2">
        <div class="col col-md-filing mb-3">
            <label for="city" class="col-form-label">
                {!! __('content.order.subviews.modal.place.city.title') !!}
            </label>
            <select class="form-select rounded-0" id="city" name="city">
            @foreach ($cities as $city)
                <option value="{!! $city->id !!}" @if($city->id === 1) selected @endif>{!! $city->name !!}</option>
            @endforeach
            </select>
        </div>
        <div class="col col-md-filing mb-3">
            <label for="address" class="col-form-label">
                {!! __('content.order.subviews.modal.place.address.title') !!}
            </label>
            <input type="text" class="form-control rounded-0" id="address" name="address" placeholder="{!! __('content.order.subviews.modal.place.address.placeholder') !!}">
        </div>
    </div>
    <div class="mb-3">
        <label for="comment" class="col-form-label">
            {!! __('content.order.subviews.modal.comment.title') !!}
        </label>
        <textarea class="form-control rounded-0" rows="5" id="comment" name="comment" placeholder="{!! __('content.order.subviews.modal.comment.placeholder') !!}"></textarea>
    </div>
</div>
<div class="modal-footer py-3">
    <button type="submit" class="btn btn-primary text-uppercase rounded-0">
        {!! __('content.order.subviews.modal.button.title') !!}
    </button>
</div>
