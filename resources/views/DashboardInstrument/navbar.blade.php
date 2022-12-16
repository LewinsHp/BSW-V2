<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav top_nav ml-auto pr-4">
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user mr-1"></i>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-user dropdown-menu-right">
                <a href="{{ route('profil') }}" class="dropdown-item">
                    <i class="fas fa-user mr-3"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</nav>

