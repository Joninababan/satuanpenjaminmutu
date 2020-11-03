<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/" class="brand-link">

    <span class="brand-text font-weight-light">SPM</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       @if(auth()->user()->role_id == 1)

       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            SPMI
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/spmi_laporan_unit/spmi_laporan_units/admin" class="nav-link">               
              <p>Laporan</p>
            </a>
          </li>

          @endif

          @if(auth()->user()->role_id == 0)
          <li class="nav-item has-treeview">

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  SPM
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/spmi_laporan_unit/spmi_laporan_unit_create" class="nav-link">               
                    <p>Form Laporan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/spmi_laporan_unit/spmi_laporan_units" class="nav-link">               
                    <p>Daftar Laporan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/spmi_revisi_laporan_unit/spmi_revisi_laporan_units" class="nav-link">               
                    <p>Daftar Revisi Laporan</p>
                  </a>
                </li>

                @endif

                @if(auth()->user()->role_id == 2)
                <li class="nav-item has-treeview">

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        SPM
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="/spmi_laporan_unit/spmi_laporan_unit" class="nav-link">               
                          <p>Lihat Laporan</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/spmi_daftar_tilik/spmi_daftar_tilik" class="nav-link">             
                          <p>Hasil Audit</p>
                        </a>
                      </li>

                      @endif
                      @if(auth()->user()->role_id == 3)
                      <li class="nav-item has-treeview">

                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                              SPM
                              <i class="fas fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">

                            <li class="nav-item">
                              <a href="/spmi_laporan_unit/spmi_laporan_units/admin" class="nav-link">     <p>Laporan</p>
                              </a>
                            </li>
                            @endif     
                          </ul>
                        </nav>
                      </div>
                    </aside>