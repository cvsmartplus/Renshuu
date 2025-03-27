export default function SideBar({ children }) {
    const menuItems = [
        { name: "Profil", route: route('profile.index'), icon: "bi-person-fill" },
        { name: "Dokumen", route: route('profile.documents'), icon: "bi-file-earmark-text" },
        { name: "Pengaturan Akun", route: route('profile.edit'), icon: "bi-gear" },
        { name: "Riwayat Pembayaran", route: route('profile.transactions'), icon: "bi-receipt" },
        { name: "Keluar", route: "#", icon: "bi-box-arrow-right", logout: true },
    ];

    return (
        <div className="container-fluid">
            <div className="row flex-nowrap">
                <div className="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar">
                    <div className="d-flex flex-column align-items-center align-items-sm-start px-3 pt-5 min-vh-100">
                        <ul className="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 gap-3" id="menu">
                            {menuItems.map((item, index) => {
                                const isActive = window.location.pathname === new URL(item.route, window.location.origin).pathname;
                                return (
                                    <li key={index} className={`nav-item w-100 rounded ${isActive ? "bg-primary text-white" : "bg-white text-black"}`}>
                                        <a href={item.route} className={`nav-link align-middle px-3 ${isActive ? "text-white" : "text-black"}`}>
                                            <i className={`fs-4 bi ${item.icon}`}></i>
                                            <span className="ms-2 d-none d-sm-inline">{item.name}</span>
                                        </a>
                                    </li>
                                );
                            })}
                        </ul>
                    </div>
                </div>
                <div className="col py-3">
                    {children}
                </div>
            </div>
        </div>
    );
}
