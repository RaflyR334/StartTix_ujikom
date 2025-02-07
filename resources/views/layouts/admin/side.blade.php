<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ url('admin') }}" class="logo">
                <img
                    src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20"
                />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <!-- Dashboard -->
                <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ url('admin') }}" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- User Management -->
                <li class="nav-item {{ request()->is('admin/user*') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="collapsed">
                        <i class="fas fa-user"></i>
                        <p>User Management</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <!-- Data Table Menu -->
                <li class="nav-item {{ request()->is('admin/genre*') || request()->is('admin/jadwal*') || request()->is('admin/film*') || request()->is('admin/kursi*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#base" aria-expanded="{{ request()->is('admin/genre*') || request()->is('admin/jadwal*') || request()->is('admin/film*') || request()->is('admin/kursi*') ? 'true' : 'false' }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Data Tabel</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/genre*') || request()->is('admin/jadwal*') || request()->is('admin/film*') || request()->is('admin/kursi*') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('genre.index') }}">
                                    <span class="sub-item">Genre</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('jadwal.index') }}">
                                    <span class="sub-item">Jadwal</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('film.index') }}">
                                    <span class="sub-item">Film</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('kursi.index') }}">
                                    <span class="sub-item">Kursi</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/gridsystem.html">
                                    <span class="sub-item">Transaksi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
