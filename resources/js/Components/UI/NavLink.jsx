import ResponsiveNavLink from "./ResponsiveNavLink";

export default function NavLink() {
    return (
        <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav ms-auto align-items-center">
                <li className="nav-item">
                    <ResponsiveNavLink href={route("welcome")} active={route().current("welcome")}>
                        Beranda
                    </ResponsiveNavLink>
                </li>
                <li className="nav-item">
                    <ResponsiveNavLink href={route("course.index")} active={route().current("course.index")}>
                        Kursus
                    </ResponsiveNavLink>
                </li>
                <li className="nav-item">
                    <ResponsiveNavLink href="#" active={route().current("pekerjaan")}>
                        Pekerjaan
                    </ResponsiveNavLink>
                </li>
                <li className="nav-item">
                    <ResponsiveNavLink href={route("artikel.index")} active={route().current("artikel.index")}>
                        Artikel
                    </ResponsiveNavLink>
                </li>
            </ul>
        </div>
    );
}
