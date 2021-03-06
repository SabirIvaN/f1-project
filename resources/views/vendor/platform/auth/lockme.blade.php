<div class="mb-3 d-flex align-items-center">
    <span style="width:200px;" class="small">
        <span class="text-ellipsis">{{ $lockUser->presenter()->title() }}</span>
        <span class="text-muted d-block text-ellipsis">{{ $lockUser->presenter()->subTitle() }}</span>
    </span>
    <input type="hidden" name="email" required value="{{ $lockUser->email }}">
</div>

@error('email')
    <span class="d-block invalid-feedback text-danger">
        {{ $errors->first('email') }}
    </span>
@enderror

<div class="mb-3">
    <input type="hidden" name="remember" value="true">

    {!! \Orchid\Screen\Fields\Password::make('password')
            ->required()
            ->tabindex(1)
            ->autofocus()
            ->placeholder(__('views.vendor.platform.auth.lockme.password.placeholder'))
    !!}
</div>

<div class="row align-items-center">
    <div class="col-md-6 col-xs-12">
        <a href="{{ route('platform.login.lock') }}" class="small">
            {{ __('views.vendor.platform.auth.lockme.sign_in') }}
        </a>
    </div>
    <div class="col-md-6 col-xs-12">
        <button id="button-login" type="submit" class="btn btn-default btn-block" tabindex="2">
            <x-orchid-icon path="login" class="small me-2" /> {{ __('views.vendor.platform.auth.lockme.login') }}
        </button>
    </div>
</div>
