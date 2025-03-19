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
                    <li>
                    <a href="{{ route('index4') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Cryptocurrency</a>
                    </li>
                    <li>
                    <a href="{{ route('index5') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Investment</a>
                    </li>
                    <li>
                    <a href="{{ route('index6') }}"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> LMS</a>
                    </li>
                    <li>
                    <a href="{{ route('index7') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> NFT & Gaming</a>
                    </li>
                    <li>
                    <a href="{{ route('index8') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Medical</a>
                    </li>
                    <li>
                    <a href="{{ route('index9') }}"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Analytics</a>
                    </li>
                    <li>
                    <a href="{{ route('index10') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> POS & Inventory </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <span>Artikel</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('articleadmin') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi-file-text" class="menu-icon"></iconify-icon>
                            <span>Artikel</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('buatarticle') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> 
                            <iconify-icon icon="bi-pencil-square" class="menu-icon"></iconify-icon>
                            <span>Buat Artikel</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <span>Kursus</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('adminkursus') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi-book" class="menu-icon"></iconify-icon>
                            <span>Kursus</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tambahkursus') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>
                            <iconify-icon icon="bi-pencil-square" class="menu-icon"></iconify-icon>
                            <span>Tambah Kursus</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <span>Pekerjaan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('pekerjaan') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi-briefcase" class="menu-icon"></iconify-icon>
                            <span>Pekerjaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tambahloker') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>
                            <iconify-icon icon="bi-briefcase-fill" class="menu-icon"></iconify-icon>
                            <span>Tambah Loker</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kelolapelamar') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>
                            <iconify-icon icon="bi-people" class="menu-icon"></iconify-icon>
                            <span>Kelola Pelamar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('email') }}">
                    <iconify-icon icon="bi-file-earmark-text"></iconify-icon>
                    <span>Laporan</span>
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
                        <a href="{{ route('KelolaAkunAdmin') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Kelola Akun Admin</a>
                    </li>
                    <li>
                        <a href="{{ route('RiwayatLog') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Riwayat Log</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-group-title">Application</li>
            <li>
                <a href="{{ route('email') }}">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href="{{ route('chatMessage') }}">
                    <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
                    <span>Chat</span>
                </a>
            </li>
            <li>
                <a href="{{ route('calendar') }}">
                    <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
                    <span>Calendar</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kanban') }}">
                    <iconify-icon icon="material-symbols:map-outline" class="menu-icon"></iconify-icon>
                    <span>Kanban</span>
                </a>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="{{ route('invoiceList') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
                    </li>
                    <li>
                    <a href="{{ route('invoicePreview') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
                    </li>
                    <li>
                    <a href="{{ route('invoiceAdd') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add new</a>
                    </li>
                    <li>
                    <a href="{{ route('invoiceEdit') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <i class="ri-robot-2-line text-xl me-6 d-flex w-auto"></i>
                    <span>Ai Application</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('textGenerator') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Text Generator</a>
                    </li>
                    <li>
                        <a href="{{ route('codeGenerator') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Code Generator</a>
                    </li>
                    <li>
                        <a href="{{ route('imageGenerator') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Image Generator</a>
                    </li>
                    <li>
                        <a href="{{ route('voiceGenerator') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Voice Generator</a>
                    </li>
                    <li>
                        <a href="{{ route('videoGenerator') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Video Generator</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <i class="ri-btc-line text-xl me-6 d-flex w-auto"></i>
                    <span>Crypto Currency</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('wallet') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Wallet</a>
                    </li>
                    <li>
                        <a href="{{ route('marketplace') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Marketplace</a>
                    </li>
                    <li>
                        <a href="{{ route('marketplaceDetails') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Marketplace Details</a>
                    </li>
                    <li>
                    <a  href="{{ route('portfolio') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Portfolios</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">UI Elements</li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                    <span>Components</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('typography') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Typography</a>
                    </li>
                    <li>
                        <a  href="{{ route('colors') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Colors</a>
                    </li>
                    <li>
                        <a  href="{{ route('button') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Button</a>
                    </li>
                    <li>
                         <a  href="{{ route('dropdown') }}"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Dropdown</a>
                    </li>
                    <li>
                        <a  href="{{ route('alert') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Alerts</a>
                    </li>
                    <li>
                       <a  href="{{ route('card') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Card</a>
                    </li>
                    <li>
                        <a  href="{{ route('carousel') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Carousel</a>
                    </li>
                    <li>
                        <a  href="{{ route('avatar') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Avatars</a>
                    </li>
                    <li>
                        <a  href="{{ route('progress') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Progress bar</a>
                    </li>
                    <li>
                        <a  href="{{ route('tabs') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Tab & Accordion</a>
                    </li>
                    <li>
                        <a  href="{{ route('pagination') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Pagination</a>
                    </li>
                    <li>
                        <a  href="{{ route('badges') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Badges</a>
                    </li>
                    <li>
                        <a  href="{{ route('tooltip') }}"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Tooltip & Popover</a>
                    </li>
                    <li>
                        <a  href="{{ route('videos') }}"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i> Videos</a>
                    </li>
                    <li>
                        <a  href="{{ route('starRating') }}"><i class="ri-circle-fill circle-icon text-indigo w-auto"></i> Star Ratings</a>
                    </li>
                    <li>
                        <a  href="{{ route('tags') }}"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Tags</a>
                    </li>
                    <li>
                        <a  href="{{ route('list') }}"><i class="ri-circle-fill circle-icon text-red w-auto"></i> List</a>
                    </li>
                    <li>
                        <a  href="{{ route('calendar') }}"><i class="ri-circle-fill circle-icon text-yellow w-auto"></i> Calendar</a>
                    </li>
                    <li>
                        <a  href="{{ route('radio') }}"><i class="ri-circle-fill circle-icon text-orange w-auto"></i> Radio</a>
                    </li>
                    <li>
                        <a  href="{{ route('switch') }}"><i class="ri-circle-fill circle-icon text-pink w-auto"></i> Switch</a>
                    </li>
                    <li>
                        <a  href="{{ route('imageUpload') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
                    <span>Forms</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('form') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Input Forms</a>
                    </li>
                    <li>
                        <a  href="{{ route('formLayout') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input Layout</a>
                    </li>
                    <li>
                        <a  href="{{ route('formValidation') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form Validation</a>
                    </li>
                    <li>
                        <a  href="{{ route('wizard') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Form Wizard</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                    <span>Table</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('tableBasic') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
                    </li>
                    <li>
                        <a  href="{{ route('tableData') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data Table</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                    <span>Chart</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('lineChart') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line Chart</a>
                    </li>
                    <li>
                        <a  href="{{ route('columnChart') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column Chart</a>
                    </li>
                    <li>
                        <a  href="{{ route('pieChart') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{ route('widgets') }}">
                    <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
                    <span>Widgets</span>
                </a>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('usersList') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
                    </li>
                    <li>
                        <a  href="{{ route('usersGrid') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
                    </li>
                    <li>
                        <a  href="{{ route('addUser') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add User</a>
                    </li>
                    <li>
                        <a  href="{{ route('viewProfile') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View Profile</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <i class="ri-user-settings-line text-xl me-6 d-flex w-auto"></i>
                    <span>Role & Access</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('roleAaccess') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Role & Access</a>
                    </li>
                    <li>
                        <a  href="{{ route('assignRole') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Assign Role</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Application</li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
                    <span>Authentication</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('signin') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
                    </li>
                    <li>
                        <a  href="{{ route('signup') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Sign Up</a>
                    </li>
                    <li>
                        <a  href="{{ route('forgotPassword') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{ route('gallery') }}">
                    <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('pricing') }}">
                    <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
                    <span>Pricing</span>
                </a>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <i class="ri-news-line text-xl me-6 d-flex w-auto"></i>
                    <span>Blog</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('blog') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Blog</a>
                    </li>
                    <li>
                        <a  href="{{ route('blogDetails') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Blog Details</a>
                    </li>
                    <li>
                        <a  href="{{ route('addBlog') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add Blog</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{ route('testimonials') }}">
                    <i class="ri-star-line text-xl me-6 d-flex w-auto"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('faq') }}">
                    <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
                    <span>FAQs</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('error') }}">
                    <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
                    <span>404</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('termsCondition') }}">
                    <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
                    <span>Terms & Conditions</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('comingSoon') }}">
                    <i class="ri-rocket-line text-xl me-6 d-flex w-auto"></i>
                    <span>Coming Soon</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('maintenance') }}">
                    <i class="ri-hammer-line text-xl me-6 d-flex w-auto"></i>
                    <span>Maintenance</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('blankPage') }}">
                    <i class="ri-checkbox-multiple-blank-line text-xl me-6 d-flex w-auto"></i>
                    <span>Blank Page</span>
                </a>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('company') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
                    </li>
                    <li>
                        <a  href="{{ route('notification') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
                    </li>
                    <li>
                        <a  href="{{ route('notificationAlert') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification Alert</a>
                    </li>
                    <li>
                        <a  href="{{ route('theme') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Theme</a>
                    </li>
                    <li>
                        <a  href="{{ route('currencies') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
                    </li>
                    <li>
                        <a  href="{{ route('language') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Languages</a>
                    </li>
                    <li>
                        <a  href="{{ route('paymentGateway') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
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