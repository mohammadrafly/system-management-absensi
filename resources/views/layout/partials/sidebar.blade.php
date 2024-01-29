<!-- Sidebar -->
<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('data.absen') }}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                    Data Absensi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('data.murid') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data Murid
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('data.users') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Data Users
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault(); performLogout();">
                <i class="nav-icon fas fa-arrow-right"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
      </ul>
    </nav>
  </div>