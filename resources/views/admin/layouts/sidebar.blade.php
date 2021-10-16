<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{asset('adminlte3')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RaysCar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('adminlte3')}}/dist/img/vector rajah gta.jpg" class="rounded-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="/admin" class="d-block">RaysCar</a>
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

        <nav class="mt-3">
            <ul class="nav nav-pills nav-legacy nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="/admin/tabledata" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Table Data Mobil
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/tabledatapembeli" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Table Data Pembeli
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/cashtable" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Cash Table
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/topics" class="nav-link">
                    <i class="nav-icon fas fa-hashtag"></i>
                  <p>
                    Topik
                  </p>
                </a>
              </li>
            </ul>
          </nav>


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
