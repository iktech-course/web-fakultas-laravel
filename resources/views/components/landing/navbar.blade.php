<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <span class="logo-light">
                <img src="{{ asset('assets/landing/images/1undhari/logo2-dark.png') }}" class="l-dark" height="48" alt="">
                <img src="{{ asset('assets/landing/images/1undhari/logo2-light.png') }}" class="l-light" height="48" alt="">
            </span>
            <img src="{{ asset('assets/landing/images/1undhari/logo2-light.png') }}" height="48" class="logo-dark-mode" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->

        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{ route('landing.beranda') }}" class="sub-menu-item">Beranda</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Profil</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li><a href="profil-fakultas.html" class="sub-menu-item">Profil Fakultas</a></li>
                                <li><a href="prodi.html" class="subm-menu-item">Prodi</a></li>
                                <li><a href="{{ route('landing.dosen.index') }}" class="sub-menu-item">Dosen</a></li>
                                <li><a href="kegiatan-list.html" class="sub-menu-item">Kegiatan Akademik</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('landing.berita.index') }}" class="sub-menu-item">Berita</a></li>
                <li><a href="{{ route('landing.fasilitas.index') }}" class="sub-menu-item">Fasilitas</a></li>
                <li><a href="{{ route('landing.pendaftaran.index') }}" class="sub-menu-item">Pendaftaran</a></li>
                <li><a href="{{ route('landing.kontak.index') }}" class="sub-menu-item">Kontak</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
