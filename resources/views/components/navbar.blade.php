
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- show app name -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/mafaza-circle.png') }}"
            alt="logo"
            width="40"
            class="shadow-light rounded-circle">
        </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i>
            <!-- show username -->
            Assalamu'alaikum, {{ Auth::user()->name }}!
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" 
                method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
    </ul>
</nav>
