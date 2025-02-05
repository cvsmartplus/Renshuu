import { Link } from '@inertiajs/react';

export default function NavLink({
}) {
    return (
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
    );
}
