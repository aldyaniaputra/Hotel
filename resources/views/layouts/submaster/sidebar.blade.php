<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Hotel Hebat</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            @yield('sidebar_content')
            <li class="menu-header">doesnt need to include</li>
            <li class="nav-item dropdown active">
              <a class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>account</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href='/jasnso'>login</a></li>
                <li><a class="nav-link" href=''>Register</a></li>
                <li><a class="nav-link" href=''>change role</a></li>
              </ul>
            </li>
            <li class="menu-header">Main Features</li>
            <li class="nav-item dropdown active">
              <a class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>customer</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href='/jasnso'>home</a></li>
                <li><a class="nav-link" href=''>reservasi</a></li>
                <li><a class="nav-link" href=''>daftar kamar tersedia</a></li>
                <li class="active"><a class="nav-link" href='/tabel'>list data</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>resepsionist</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href=''>data reservasi</a></li>
                <li><a class="nav-link" href=''>data customer</a></li>
              </ul>
            </li>
            
            <li class="nav-item dropdown active">
              <a class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>admin</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href=''>data kamar yang dapat diedit</a></li>
                <li><a class="nav-link" href='/AccountTable'>data customer</a></li>
              </ul>
            </li>
          </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>