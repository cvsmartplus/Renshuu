import { Link, usePage } from "@inertiajs/react";
import ApplicationLogo from "./ApplicationLogo";

export default function NavBar() {
    const { auth } = usePage().props; // Ambil data auth dari Inertia
    const user = auth?.user; // Cek apakah user sudah login

    return (
        <>
            <nav className="navbar navbar-expand-lg sticky-top bg-light navbar-light" style={{ boxShadow: "0px 4px 6px rgba(0, 0, 0, 0.1)" }}>
                <div className="container">
                    <Link className="navbar-brand" href={route("welcome")}>
                        <ApplicationLogo 
                            id="Renshuu-logo"
                            alt="Renshuu Logo"
                            draggable="false"
                            height="45"
                        />
                    </Link>
                    <button
                        className="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i className="fas fa-bars"></i>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav ms-auto align-items-center">
                            <li className="nav-item">
                                <Link className="nav-link mx-2" href={route("welcome")}>Beranda</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link mx-2" href="#">Kursus</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link mx-2" href="#">Pekerjaan</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link mx-2" href="#">Artikel</Link>
                            </li>
                        </ul>
                    </div>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav ms-auto align-items-center">
                            <li className="nav-item border-end border-grey pe-3">
                                <i className="fa-regular fa-bell"></i>
                            </li>

                            {user ? (
                                <>

                                <li className="nav-item dropdown ms-3">
                                    <Link className="nav-link mx-2" href={route('dashboard')}>
                                        Dashboard
                                    </Link>
                                </li>
                                {/* // Jika user sudah login, tampilkan profil */}
                                <li className="nav-item dropdown ms-3">
                                    <Link 
                                        className="nav-link dropdown-toggle d-flex align-items-center"
                                        id="navbarDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        <img 
                                            src={user.profile_photo_url || "https://picsum.photos/150"} // Default jika tidak ada foto
                                            alt="User Profile"
                                            className="rounded-circle borstrok"
                                            width="30"
                                            height="30"
                                        />
                                    </Link>
                                    <ul className="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li>
                                            <Link className="dropdown-item" href={route('profile.edit')}>
                                                Profil Saya
                                            </Link>
                                        </li>
                                        <li>
                                            <Link className="dropdown-item" href={route('logout')} method="post" as="button">
                                                Keluar
                                            </Link>
                                        </li>
                                    </ul>
                                </li>
                                </>
                            ) : (
                                // Jika user belum login, tampilkan tombol Masuk dan Daftar
                                <>
                                    <li className="nav-item ms-3">
                                        <Link className="btn btn-custom-blue btn-rounded" href={route('login')}>
                                            Masuk
                                        </Link>
                                    </li>
                                    <li className="nav-item ms-3 ctabtn rounded">
                                        <Link className="btn btn-rounded text-white" href={route('register')}>
                                            Daftar
                                        </Link>
                                    </li>
                                </>
                            )}
                        </ul>
                    </div>
                </div>
            </nav>
        </>
    );
}
