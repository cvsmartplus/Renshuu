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
                    <ResponsiveNavLink href="#" active={route().current("kursus")}>
                        Kursus
                    </ResponsiveNavLink>
                </li>
                <li className="nav-item">
                    <ResponsiveNavLink href="#" active={route().current("pekerjaan")}>
                        Pekerjaan
                    </ResponsiveNavLink>
                </li>
                <li className="nav-item">
                    <ResponsiveNavLink href={route("article")} active={route().current("article")}>
                        Artikel
                    </ResponsiveNavLink>
                </li>
            </ul>
        </div>
    );
}
