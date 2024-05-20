<nav class="navbar navbar-expand-lg " style="background-color: rgb(51, 36, 36)">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="position-absolute top-1 left-2">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('storage\Images\BloggedLogo.png') }}" class="img-fluid" style="width:55px " alt="logo">
            </a>
        </div>
        <div>.</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars text-light fs-2"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0  gap-3 pt-2">
        <li class="nav-item mt-3 mt-md-0">
            <a class="nav-link text-light {{ request()->routeIs('dashboard') ? ' active' : '' }}" href="{{ route('dashboard') }}">
                <b>{{ __('Blogs') }}</b>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('blog.service') ? ' active' : '' }}" href="{{ route('blog.service') }}">
                <b>{{ __('Our Services') }}</b>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('blog.create') ? ' active' : '' }}" href="{{ route('blog.create') }}">
                <b>{{ __('Create a Blog') }}</b>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('user.profile') ? ' active' : '' }}" href="{{ route('user.profile', auth()->id()) }}">
                <b>{{ __('Profile') }}</b>
            </a>
        </li>
        
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf

            <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    </ul>
</div>
    </div>
</nav>
