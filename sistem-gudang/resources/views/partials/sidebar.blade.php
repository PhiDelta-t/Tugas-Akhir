<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('/admin/dist/img/OIP.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @if (Auth::check())
                <a href="#" class="d-block">{{ session('username') }}</a>
            @else
                <a href="#" class="d-block">Kelompok 2</a>
            @endif
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Beranda
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/barang" class="nav-link">
                    <i class="nav-icon fas fa-archive"></i>
                    <p>
                        Data Barang
                        <i class="right fas fa-angle"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/rak" class="nav-link">
                    <i class="nav-icon fas  fa-box"></i>
                    <p>
                        Rak
                        <i class="right fas fa-angle"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <!-- Mengganti kelas dari "fas fa-th" menjadi "fas fa-shopping-cart" -->
                    <p>
                        Transaksi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/barangmasuk" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Barang Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/barangkeluar" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Barang Keluar</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <!-- Mengganti kelas dari "fas fa-th" menjadi "fas fa-file-alt" -->
                    <p>
                        Laporan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/laporanstok" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stok barang</p>
                        </a>
                    </li>
                </ul>
            </li>
            @if (auth()->check())
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                            <i class="right fas fa-angle"></i>
                        </p>
                    </a>
                </li>
            @endif
    </nav>
    <!-- /.sidebar-menu -->
</div>
