<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('templates/dist/img/dashboard-header.png')}}" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">BP Batam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('templates/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
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

            @if(auth()->user()->level=="user")
            <li class="nav-item">
                <a href="{{route('beranda')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
           <li class="nav-item">
              <a href="{{route('buatpermohonan')}}" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                <p>Buat Permohonan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('listpermohonan')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>Permohonan Saya</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('tracking')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard"></i>
                <p>Tracking</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('usulan')}}" class="nav-link">
                <i class="nav-icon fas fa-map-marked-alt"></i>
                <p>Usulan Titik Reklame</p>
              </a>
            </li>
            @endif

            @if(auth()->user()->level=="admin")
            <li class="nav-item">
              <a href="{{route('datadev')}}" class="nav-link">
                <i class="nav-icon fa fa-database"></i>
                <p>Data Dev</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Perizinan Reklame
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('monitoring')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monitoring Reklame</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-asterisk"></i>
                <p>
                  Data Master
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('layanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Layanan dan Persyaratan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('liburnasional')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari Libur Nasional</p>
                  </a>
                </li>
              </ul>
            </li>

          <li class="nav-item">
            <a href="{{route('masterplane')}}" class="nav-link">
              <i class="nav-icon fa fa-window-maximize"></i>
              <p>
                Masterplan Reklame
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('prosesizin')}}" class="nav-link">
              <i class="nav-icon fa fa-spinner"></i>
              <p>
                Proses Izin
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              </li>
              <li class="nav-item">
                <a href="{{route('role')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('posisi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posisi Signature</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('datapemohon')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Pemohon
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('statistik')}}" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Statistik
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('helpdesk')}}" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Data Helpdesk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('caridata')}}" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Cari Data
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif

          @if(auth()->user()->level=="staf")
            <li class="nav-item">
              <a href="{{route('datadev')}}" class="nav-link">
                <i class="nav-icon fa fa-database"></i>
                <p>Data Dev</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Perizinan Reklame
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('monitoring')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monitoring Reklame</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-asterisk"></i>
                <p>
                  Data Master
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('layanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Layanan dan Persyaratan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('liburnasional')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari Libur Nasional</p>
                  </a>
                </li>
              </ul>
            </li>

          <li class="nav-item">
            <a href="{{route('masterplane')}}" class="nav-link">
              <i class="nav-icon fa fa-window-maximize"></i>
              <p>
                Masterplan Reklame
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('data-permohonan')}}" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Proses Permohonan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('prosesizin')}}" class="nav-link">
              <i class="nav-icon fa fa-spinner"></i>
              <p>
                Proses Izin
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('datapemohon')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Pemohon
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('statistik')}}" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Statistik
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('helpdesk')}}" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Data Helpdesk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('caridata')}}" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Cari Data
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif

          @if(auth()->user()->level=="kasubbid")
            <li class="nav-item">
              <a href="{{route('datadev')}}" class="nav-link">
                <i class="nav-icon fa fa-database"></i>
                <p>Data Dev</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Perizinan Reklame
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('monitoring')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monitoring Reklame</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-asterisk"></i>
                <p>
                  Data Master
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('layanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Layanan dan Persyaratan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('liburnasional')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari Libur Nasional</p>
                  </a>
                </li>
              </ul>
            </li>

          <li class="nav-item">
            <a href="{{route('masterplane')}}" class="nav-link">
              <i class="nav-icon fa fa-window-maximize"></i>
              <p>
                Masterplan Reklame
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('data-permohonan')}}" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Proses Permohonan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('prosesizin')}}" class="nav-link">
              <i class="nav-icon fa fa-spinner"></i>
              <p>
                Proses Izin
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('datapemohon')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Pemohon
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('statistik')}}" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Statistik
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('helpdesk')}}" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Data Helpdesk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('caridata')}}" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Cari Data
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif

          @if(auth()->user()->level=="kabid")
            <li class="nav-item">
              <a href="{{route('datadev')}}" class="nav-link">
                <i class="nav-icon fa fa-database"></i>
                <p>Data Dev</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Perizinan Reklame
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('monitoring')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monitoring Reklame</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-asterisk"></i>
                <p>
                  Data Master
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('layanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Layanan dan Persyaratan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('liburnasional')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari Libur Nasional</p>
                  </a>
                </li>
              </ul>
            </li>

          <li class="nav-item">
            <a href="{{route('masterplane')}}" class="nav-link">
              <i class="nav-icon fa fa-window-maximize"></i>
              <p>
                Masterplan Reklame
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('data-permohonan')}}" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Proses Permohonan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('prosesizin')}}" class="nav-link">
              <i class="nav-icon fa fa-spinner"></i>
              <p>
                Proses Izin
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('datapemohon')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Pemohon
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('statistik')}}" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Statistik
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('helpdesk')}}" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Data Helpdesk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('caridata')}}" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Cari Data
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif

          @if(auth()->user()->level=="direktur")
            <li class="nav-item">
              <a href="{{route('datadev')}}" class="nav-link">
                <i class="nav-icon fa fa-database"></i>
                <p>Data Dev</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Perizinan Reklame
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('monitoring')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monitoring Reklame</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-asterisk"></i>
                <p>
                  Data Master
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('layanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Layanan dan Persyaratan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('liburnasional')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari Libur Nasional</p>
                  </a>
                </li>
              </ul>
            </li>

          <li class="nav-item">
            <a href="{{route('masterplane')}}" class="nav-link">
              <i class="nav-icon fa fa-window-maximize"></i>
              <p>
                Masterplan Reklame
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('data-permohonan')}}" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Proses Permohonan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('prosesizin')}}" class="nav-link">
              <i class="nav-icon fa fa-spinner"></i>
              <p>
                Proses Izin
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('datapemohon')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Pemohon
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('statistik')}}" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Statistik
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('helpdesk')}}" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Data Helpdesk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('caridata')}}" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Cari Data
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
