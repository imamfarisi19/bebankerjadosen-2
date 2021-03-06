<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="beranda" class="brand-link">
        <img src="{{asset('AdminLTE/dist/img/UMBLogo.png')}}" alt="UMB Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Beban Kerja Dosen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('AdminLTE/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <p href="#" class="d-block" style="color:white">{{auth()->user()->name}}</p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="beranda" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="biodata" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Biodata
                        </p>
                    </a>
                </li>
                @if (auth()->user()->level=="Admin")
                <li class="nav-item">
                    <a href="daftar" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            daftar
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level=="User")
                <li class="nav-item">
                    <a href="tahun-pengajaran" class="nav-link">
                        <i class="nav-icon fa fa-university"></i>
                        <p>
                            Pengajaran
                        </p>
                    </a>
                </li>                
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flask"></i>
                        <p>
                            Penelitian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Pengabdian
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>
                            Penunjang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tahun-asesor" class="nav-link">
                    <i class="nav-icon fas fa-check-circle"></i>
                        <p>
                            Asesor
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="nav-icon fa fa-times"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>