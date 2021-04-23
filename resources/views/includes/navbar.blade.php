<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">

        <!-- Burger Bar -->
        <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <!-- Close Burger Bar -->

        <!-- Search -->
        <!-- <div class="search-element">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
        </div> -->
        <!-- Close Search -->

    </form>

    <!-- Notification -->
    <ul class="navbar-nav navbar-right">
        <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
            <div class="float-right">
                <a href="#">Mark All As Read</a>
            </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
            <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-success text-white">
                <i class="fas fa-check"></i>
                </div>
                <div class="dropdown-item-desc">
                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                <div class="time">12 Hours Ago</div>
                </div>
            </a>
            <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-danger text-white">
                <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="dropdown-item-desc">
                Low disk space. Let's clean it!
                <div class="time">17 Hours Ago</div>
                </div>
            </a>
            <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-info text-white">
                <i class="fas fa-bell"></i>
                </div>
                <div class="dropdown-item-desc">
                Welcome to Stisla template!
                <div class="time">Yesterday</div>
                </div>
            </a>
            </div>
            <div class="dropdown-footer text-center">
            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        </li> -->
        <!-- Close Notification -->

        <!-- Account -->
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{ asset('') }}" class="rounded-circle mr-1" style="width:auto%; height:90%;">
        <div class="d-sm-none d-lg-inline-block">Hi,Test</div></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="profile.php" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
            </a>
            <!-- <a href="features-settings.html" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Settings
            </a> -->
            <div class="dropdown-divider"></div>
            
            <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </li>
        <!-- Close Account -->

    </ul>
</nav>
