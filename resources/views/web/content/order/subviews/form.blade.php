<form action="{!! route('order.store') !!}" method="POST">
    @csrf
    <input type="hidden" id="service" name="service" value="{!! $service->id !!}">
    <div class="modal-header @if(url()->current() !== route('welcome.show')) border-bottom-0 pt-4 pb-1 @endif text-center py-3">
        <h5 class="modal-title @if(url()->current() !== route('welcome.show')) fw-bold @endif w-100 fs-4" id="exampleModalLabel">
            {!! $service->name !!}
        </h5>
        @if (url()->current() === route('welcome.show'))
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        @endif
    </div>
    <div class="modal-body py-3">
        <div class="mb-3">
            <label for="name" class="col-form-label">
                {!! __('content.order.subviews.form.name.title') !!}
            </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{!! __('content.order.subviews.form.name.placeholder') !!}">
        </div>
        <div class="row row-cols-2">
            <div class="col col-md-filing mb-3">
                <label for="phone" class="col-form-label">
                    {!! __('content.order.subviews.form.phone.title') !!}
                </label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="{!! __('content.order.subviews.form.phone.placeholder') !!}">
            </div>
            <div class="col col-md-filing mb-3">
                <label for="email" class="col-form-label">
                    {!! __('content.order.subviews.form.email.title') !!}
                </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="{!! __('content.order.subviews.form.email.placeholder') !!}">
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col col-md-filing mb-3">
                <label for="city" class="col-form-label">
                    {!! __('content.order.subviews.form.place.city.title') !!}
                </label>
                <select class="form-select" id="city" name="city">
                @foreach ($cities as $city)
                    <option value="{!! $city->id !!}" @if($city->id === 1) selected @endif>{!! $city->name !!}</option>
                @endforeach
                </select>
            </div>
            <div class="col col-md-filing mb-3">
                <label for="address" class="col-form-label">
                    {!! __('content.order.subviews.form.place.address.title') !!}
                </label>
                <input type="text" class="form-control" id="address" name="address" placeholder="{!! __('content.order.subviews.form.place.address.placeholder') !!}">
            </div>
        </div>
        <div class="mb-3">
            <label for="comment" class="col-form-label">
                {!! __('content.order.subviews.form.comment.title') !!}
            </label>
            <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="{!! __('content.order.subviews.form.comment.placeholder') !!}"></textarea>
        </div>
    </div>
    <div class="modal-footer @if(url()->current() !== route('welcome.show')) border-top-0 pb-4 pt-0 @else py-3 @endif">
        <button type="submit" class="btn btn-primary text-uppercase">
            {!! __('content.order.subviews.form.button.title') !!}
        </button>
    </div>
</form>
