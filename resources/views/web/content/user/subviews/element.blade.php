@foreach($users as $user)
<div class="col-sm-4 col-md-filing mb-5">
    <h4 class="fs-4 mb-2">
        {!! $user->position->name !!}:
    </h4>
    <h3 class="fs-4 fw-bold mb-2">
        {!! $user->name !!}
    </h3>
    <p class="mb-2">
        {!! $user->position->description !!}
    </p>
    <b>
        {!!$user->email !!}
    </b>
</div>
@endforeach
