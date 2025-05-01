<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="{{ route('index') }}" class="sidebar-logo">
            <img src="{{ asset('images/renshuu-logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('images/renshuu-logo.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Beranda</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('index') }}">
                            <iconify-icon icon="bi-book" class="menu-icon"></iconify-icon>
                            <span>Kursus</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index2') }}">
                            <iconify-icon icon="bi-briefcase" class="menu-icon"></iconify-icon>
                            <span>Pekerjaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index3') }}"> 
                            <iconify-icon icon="bi-file-text" class="menu-icon"></iconify-icon>
                            <span>Artikel</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="bi-newspaper" class="menu-icon"></iconify-icon>
                    <span>Artikel</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('articleadmin') }}">
                            <iconify-icon icon="bi-file-text" class="menu-icon"></iconify-icon>
                            <span>Artikel</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('buatarticle') }}">
                            <iconify-icon icon="bi-pencil-square" class="menu-icon"></iconify-icon>
                            <span>Buat Artikel</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="bi-mortarboard" class="menu-icon"></iconify-icon>
                    <span>Kursus</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('adminkursus') }}">
                            <iconify-icon icon="bi-book" class="menu-icon"></iconify-icon>
                            <span>Kursus</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tambahkursus') }}">
                            <iconify-icon icon="bi-journal-plus" class="menu-icon"></iconify-icon>
                            <span>Tambah Kursus</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="bi-briefcase" class="menu-icon"></iconify-icon>
                    <span>Pekerjaan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('pekerjaan') }}">
                            <iconify-icon icon="bi-briefcase" class="menu-icon"></iconify-icon>
                            <span>Pekerjaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tambahloker') }}">
                            <iconify-icon icon="bi-clipboard-plus" class="menu-icon"></iconify-icon>
                            <span>Tambah Loker</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kelolapelamar') }}">
                            <iconify-icon icon="bi-people" class="menu-icon"></iconify-icon>
                            <span>Kelola Pelamar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('pendaftar') }}">
                    <i class="menu-icon ri-contacts-line"></i>
                    <span>Pendaftar</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="bi-person-badge" class="menu-icon"></iconify-icon>
                    <span class="mx-2">Peran &</span>
                    <div class="d-block">Riwayat</div>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('KelolaAkunAdmin') }}">
                        <iconify-icon icon="bi-person-gear" class="menu-icon"></iconify-icon>
                            <span>Kelola Akun Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('RiwayatLog') }}">
                        <iconify-icon icon="bi-clipboard-data" class="menu-icon"></iconify-icon>
                            <span>Riwayat Log</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".dropdown > a").forEach(function (dropdownToggle) {
                dropdownToggle.addEventListener("click", function (e) {
                    e.preventDefault();
                    let submenu = this.nextElementSibling;
        
                    // Toggle menu tanpa menutup menu lain
                    submenu.classList.toggle("open");
        
                    // Tambahkan class 'active' ke parent agar terlihat terbuka
                    this.parentElement.classList.toggle("active");
                });
            });
        });
        </script>
        
</aside>