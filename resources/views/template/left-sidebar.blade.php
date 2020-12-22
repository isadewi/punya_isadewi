  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Sistem Kependudukan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">MENU</li>

          <li class="nav-item">
            <a href="{{ route('kk.index') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                  Data Kartu Keluarga
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('penduduks.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                  Data Penduduk
              </p>
            </a>
          </li>

           

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-file"></i>
              <p>
                 Laporan
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('laporan.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penduduk usia produktif </p>
                </a>
              </li>
              
            </ul>

             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Penduduk pada nagari </p>
                </a>
              </li>
              
            </ul>

             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jumlah penduduk Level Pendidikan < SMP </p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
