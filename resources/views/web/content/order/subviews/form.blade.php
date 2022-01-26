{!! Form::open(['url' => route('order.store'), 'method' => 'POST']) !!}

{!! Form::hidden('service_id', $service->id) !!}

<div
    class="modal-header @if(url()->current() !== route('welcome.show')) border-bottom-0 pt-4 pb-1 @endif text-center py-3">

    <h5 class="modal-title @if(url()->current() !== route('welcome.show')) fw-bold @endif w-100 fs-4" id="exampleModalLabel">
        {!! $service->name !!}
    </h5>

    @if(url()->current() === route('welcome.show'))
        {!! Form::button(__('views.web.content.order.subviews.form.close_button'), ['class' => 'btn-close', 'data-bs-dismiss' => 'modal', 'aria-label' => 'Close']) !!}
    @endif

</div>
<div class="modal-body py-3">
    <div class="mb-3">

        {!! Form::label('name', __('views.web.content.order.subviews.form.name.label'), ['class' => 'col-form-label']) !!}

        {!! Form::text('name', null, ['class'=> 'form-control', 'id' => 'name', 'placeholder' => __('views.web.content.order.subviews.form.name.text.placeholder'), 'required']) !!}

    </div>
    <div class="row row-cols-2">
        <div class="col col-md-filing mb-3">

            {!! Form::label('phone', __('views.web.content.order.subviews.form.phone.label'), ['class' => 'col-form-label']) !!}

            {!! Form::tel('phone', null, ['class'=> 'form-control', 'id' => 'phone', 'placeholder' => __('views.web.content.order.subviews.form.phone.text.placeholder'), 'required']) !!}

        </div>
        <div class="col col-md-filing mb-3">

            {!! Form::label('email', __('views.web.content.order.subviews.form.email.label'), ['class' => 'col-form-label']) !!}

            {!! Form::email('email', null, ['class'=> 'form-control', 'id' => 'email', 'placeholder' => __('views.web.content.order.subviews.form.email.text.placeholder'), 'required']) !!}

        </div>
    </div>
    <div class="row row-cols-2">
        <div class="col col-md-filing mb-3">

            {!! Form::label('city', __('views.web.content.order.subviews.form.city.label'), ['class' => 'col-form-label']) !!}

            {!! Form::select('city_id', $cities->pluck('name', 'id'), null, ['class' => 'form-select', 'id' => 'city']) !!}

        </div>
        <div class="col col-md-filing mb-3">

            {!! Form::label('address', __('views.web.content.order.subviews.form.address.label'), ['class' => 'col-form-label']) !!}

            {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => __('views.web.content.order.subviews.form.address.text.placeholder'), 'required']) !!}

        </div>
    </div>
    <div class="mb-3">

        {!! Form::label('comment', __('views.web.content.order.subviews.form.comment.label')) !!}

        {!! Form::textarea('comment', null, ['class' => 'form-control', 'id' => 'comment', 'rows' => '5', 'placeholder' => __('views.web.content.order.subviews.form.comment.text.placeholder')]) !!}

    </div>
</div>
<div class="modal-footer @if(url()->current() !== route('welcome.show')) border-top-0 pb-4 pt-0 @else py-3 @endif">

    {!! Form::submit(__('views.web.content.order.subviews.form.send_button'), ['class' => 'btn btn-primary text-uppercase']) !!}

</div>
{!! Form::close() !!}
