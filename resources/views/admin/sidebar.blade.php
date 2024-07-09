<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #ff8080;">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ asset('assets/img/logorent.jpeg') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: black; font-family: 'Times New Roman';">Admin01</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/karina.jpeg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('/admin') }}" class="d-block" style="color: black; font-family: 'Times New Roman';">Karina</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search" style="background-color: #161616; color: black; font-family: 'Times New Roman';">
                <div class="input-group-append">
                    <button class="btn btn-sidebar" style="background-color: #161616;">
                        <i class="fas fa-search fa-fw" style="color: black;"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link" style="color: black; font-family: 'Times New Roman';">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left" style="color: black;"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/armada') }}" class="nav-link" style="color: black; font-family: 'Times New Roman';">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
                        <p>
                            Armada
                            <i class="right fas fa-angle-left" style="color: black;"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/jenis_kendaraan') }}" class="nav-link" style="color: black; font-family: 'Times New Roman';">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
                        <p>
                            Jenis Kendaraan
                            <i class="right fas fa-angle-left" style="color: black;"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/pembayaran') }}" class="nav-link" style="color: black; font-family: 'Times New Roman';">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
                        <p>
                            Pembayaran
                            <i class="right fas fa-angle-left" style="color: black;"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/peminjaman') }}" class="nav-link" style="color: black; font-family: 'Times New Roman';">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
                        <p>
                            Peminjaman
                            <i class="right fas fa-angle-left" style="color: black;"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/peminjaman') }}" class="nav-link" style="color: black; font-family: 'Times New Roman';">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
                        <p>
                            Logout
                            <i class="right fas fa-angle-left" style="color: black;"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>
    .nav-sidebar > .nav-item > .nav-link:hover {
        background-color: #161616;
        color: white !important;
    }
</style>
