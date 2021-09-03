<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container my-2">
        <h1>
            <a class="navbar-brand fs-1 fw-bold" href="#">
                {!! __('layout.title') !!}
            </a>
        </h1>
        <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between d-block" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {!! Checker::activeLink('/') !!}" href="{!! route('welcome.show') !!}">
                        {!! __('content.welcome.title') !!}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! Checker::activeLink('contacts') !!}" href="{!! route('user.index') !!}">
                        {!! __('content.user.title') !!}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {!! __('content.admin.title') !!}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
