<nav id="sidebar" class="sidebar-wrapper sidebar-colored">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="{{ asset('assets/dashboard/images/logo2-dark.png') }}" height="45" class="logo-light-mode" alt="">
                <img src="{{ asset('assets/dashboard/images/logo2-light.png') }}" height="45" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('assets/dashboard/images/logo2-light.png') }}" height="45" alt="">
                </span>
            </a>
        </div>
        
        <ul class="sidebar-menu">
            <li class="sidebar-item active">
                <a href="{{ route('home') }}"><i class="ti ti-home me-2"></i>Dashboard</a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('berita.index') }}"><i class="ti ti-file-text me-2"></i>Berita</a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('kegiatan.index') }}"><i class="ti ti-book-2 me-2"></i>Kegiatan Akademik</a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('pesan.index') }}"><i class="ti ti-message me-2"></i>Pesan</a>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-badge me-2"></i>Akademik</a>
                <div class="sidebar-submenu">
                  <ul>
                    <li><a href="{{ route('dosen.index') }}">Dosen</a></li>
                    <li><a href="{{ route('matakuliah.index') }}">Mata Kuliah</a></li>
                  </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-user-circle me-2"></i>Manajemen Sistem</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('user.index') }}"></i>User</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->