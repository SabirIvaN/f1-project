<div class="col-sm-6 mb-5">
    <h4 class="fs-4 mb-4">
        {!! $user->position->title !!}:
    </h4>
    <h3 class="fs-3 fw-bold mb-2">
        {!! $user->name !!}
    </h3>
    <p class="mb-2">
        {!! $user->position->description !!}
    </p>
    <b>
        {!!$user->email !!}
    </b>
</div>
