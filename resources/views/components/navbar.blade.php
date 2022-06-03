<header id="topnav" class="defaultscroll sticky">
    <div class="container py-2">
        <a class="logo" href="index.html">
            <img src="{{ asset('images/logo.png') }}" height="50" class="logo-light-mode" alt="Rs Umi Barokah">
        </a>
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <div id="navigation"> 
            <ul class="navigation-menu">
                <li>
                    <a href="{{ url('') }}" class="sub-menu-item">Beranda</a>
                </li>
                <li>
                    <a href="{{ url('') }}" class="sub-menu-item">Profil</a>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Layanan</a>
                    <span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Layanan Rawat Jalan</a>
                        </li>
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Layanan Rawat Inap</a>
                        </li>
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Layanan Unggulan</a>
                        </li>
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Layanan Penunjang</a>
                        </li>
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Layanan Pengaduan</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Alur Pendaftaran</a>
                    <span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Pasien Rawat Jalan</a>
                        </li>
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Pasien Rawat Inap</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Informasi</a>
                    <span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Artikel Kesehatan</a>
                        </li>
                        <li>
                            <a href="{{ url('') }}" class="sub-menu-item">Lowongan Kerja</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>