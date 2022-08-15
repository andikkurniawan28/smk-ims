<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="/AdminLTE-master/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMK-IMS</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="admin" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Home 
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>Database <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/user" class="nav-link">
                            <i class="far fa-user nav-icon"></i>
                            <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/role" class="nav-link">
                            <i class="far fa-id-card nav-icon"></i>
                            <p>Jabatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/major" class="nav-link">
                            <i class="far fa-id-card nav-icon"></i>
                            <p>Jurusan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>