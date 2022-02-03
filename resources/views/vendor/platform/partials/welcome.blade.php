<div class="bg-white rounded-top shadow-sm mb-3">

    <div class="row g-0">
        <div class="col col-lg-10 mt-6 p-4 pe-md-0">

            <h2 class="mt-2 text-dark fw-light">
                {!! __('views.vendor.platform.partials.welcome.greeting.header') !!}
            </h2>

            <p>
                {!! __('views.vendor.platform.partials.welcome.greeting.text') !!}
            </p>
        </div>
        <div class="d-none d-lg-block col align-self-center text-end text-muted p-4">
            <x-orchid-icon path="orchid" width="6em" height="100%"/>
        </div>
    </div>

    <div class="row bg-light m-0 p-4 border-top rounded-bottom">

        <div class="col-md-6 my-2">
            <h3 class="text-muted fw-light">
                <x-orchid-icon path="open"/>

                <span class="ms-3 text-dark">
                    {!! __('views.vendor.platform.partials.welcome.orders.header') !!}
                </span>
            </h3>
            <p class="ms-md-5 ps-md-1">
                {!! __('views.vendor.platform.partials.welcome.orders.text') !!}
            </p>
        </div>

        <div class="col-md-6 my-2">
            <h3 class="text-muted fw-light">
                <x-orchid-icon path="briefcase"/>

                <span class="ms-3 text-dark">
                    {!! __('views.vendor.platform.partials.welcome.services.header') !!}
                </span>
            </h3>
            <p class="ms-md-5 ps-md-1">
                {!! __('views.vendor.platform.partials.welcome.services.text') !!}
            </p>
        </div>

        <div class="col-md-6 my-2">
            <h3 class="text-muted fw-light">
                <x-orchid-icon path="table"/>

                <span class="ms-3 text-dark">
                    {!! __('views.vendor.platform.partials.welcome.staff.header') !!}
                </span>
            </h3>
            <p class="ms-md-5 ps-md-1">
                {!! __('views.vendor.platform.partials.welcome.staff.text') !!}
            </p>
        </div>

        <div class="col-md-6 my-2">
            <h3 class="text-muted fw-light">
                <x-orchid-icon path="social-github"/>

                <span class="ms-3 text-dark">
                    {!! __('views.vendor.platform.partials.welcome.documentation.header') !!}
                </span>
            </h3>
            <p class="ms-md-5 ps-md-1">
                {!! __('views.vendor.platform.partials.welcome.documentation.text') !!}
                <a href="https://github.com/SabirIvaN/f1-project" target="_blank" class="text-u-l">{!! __('views.vendor.platform.partials.welcome.documentation.link') !!}</a>{!! __('views.vendor.platform.partials.welcome.documentation.point') !!}
            </p>
        </div>

</div>

