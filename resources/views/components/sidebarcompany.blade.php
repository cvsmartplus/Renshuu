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
            <li>
                <a href="{{ route('companyadmin.dashboard') }}">
                    <iconify-icon icon="tabler:home" class="menu-icon"></iconify-icon>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('companyadmin.pekerjaan') }}">
                    <iconify-icon icon="tabler:briefcase" class="menu-icon"></iconify-icon>
                    <span>Kelola Pekerjaan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('companyadmin.pelamar') }}">
                    <iconify-icon icon="tabler:users" class="menu-icon"></iconify-icon>
                    <span>Kelola Pelamar</span>
                </a>
            </li>
            <li>
                <a href="{{ route('companyadmin.pengaturan') }}">
                    <iconify-icon icon="tabler:settings" class="menu-icon"></iconify-icon>
                    <span>Pengaturan Akun</span>
                </a>
            </li>
            <li class="logout-item">
                <a href="{{ route('companyadmin.logout') }}">
                    <iconify-icon icon="tabler:logout" class="menu-icon"></iconify-icon>
                    <span>Keluar Akun</span>
                </a>
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