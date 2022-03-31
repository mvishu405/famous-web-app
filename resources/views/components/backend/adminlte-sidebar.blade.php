<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a> </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="route('logout')"
                    role="button" onclick="event.preventDefault();this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
            </form>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link"> <img src="{{ asset('backend/img/AdminLTELogo.png') }}"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> <span
            class="brand-text font-weight-light">{{ env('APP_NAME') }}</span> </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image"> <img src="{{ asset('backend/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2" alt="User Image"> </div>
            <div class="info"> <a href="#" class="d-block">{{ Auth::user()->email }}</a> </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('backend.dashboard') }}"
                        class="nav-link {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.users.index') }}"
                        class="nav-link {{ request()->routeIs('backend.users.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.homepage-banners.index') }}"
                        class="nav-link {{ request()->routeIs('backend.homepage-banners.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Homepage Banners
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.work-categories.index') }}"
                        class="nav-link {{ request()->routeIs('backend.work-categories.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Work Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.works.index') }}"
                        class="nav-link {{ request()->routeIs('backend.works.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Works
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('backend.news.index') }}"
                        class="nav-link {{ request()->routeIs('backend.news.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            News
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('backend.homepage-sliders.index') }}"
                        class="nav-link {{ request()->routeIs('backend.homepage-sliders.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Testimonial Slider
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.blogs.index') }}"
                        class="nav-link {{ request()->routeIs('backend.blogs.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.teams.index') }}"
                        class="nav-link {{ request()->routeIs('backend.teams.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Team
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.career.index') }}"
                        class="nav-link {{ request()->routeIs('backend.career.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Career Enqiry
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.contact.index') }}"
                        class="nav-link {{ request()->routeIs('backend.contact.*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Contact Enqiry
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard <i class="right fas fa-angle-left"></i> </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item">
                    <a href="gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li> --}}


                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard <i class="right fas fa-angle-left"></i> </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
